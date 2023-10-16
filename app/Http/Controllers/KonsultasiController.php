<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Kerusakan;
use App\Models\Knowlidge;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class KonsultasiController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('pages.konsultasi.index', compact('gejalas'));
    }

    public function exportPdf()
    {
        $user = Auth::user(); // Mendapatkan pengguna yang sedang login

        $activity = Activity::where('causer_id', $user->id)
            ->latest() // Mengambil aktivitas terbaru
            ->first();  // Mengambil aktivitas terbaru yang paling pertama

        if ($activity) {
            $description = json_decode($activity->description, true);

            if (isset($description['data'])) {
                $formattedActivity = [
                    'name' => $activity->causer->name,
                    'email' => $activity->causer->email,
                    'hasil' => $description['data']['name'],
                    'solusi_kerusakan' => $description['data']['solusi'],
                    'created_at' => $activity->created_at->format('Y-m-d H:i:s'),
                    'selectedGejalaNames' => $description['selectedGejalaNames'] ?? null,

                ];
            } else {
                $formattedActivity = null;
            }
        } else {
            $formattedActivity = null;
        }
        // dd($formattedActivity);

        $pdf = PDF::loadView('frontend.diagnosa.pdf', compact('formattedActivity'));

        // Optionally, you can set PDF options, such as paper size and orientation
        // $pdf->setPaper('A4', 'landscape');

        // Return the PDF as a download
        return $pdf->download('consultation_result.pdf');
    }

    public function consult(Request $request)
    {
        $selectedGejalaIds = $request->input('gejala_id');

        // Mengambil nama gejala berdasarkan ID
        $selectedGejalaNames = Gejala::whereIn('id', $selectedGejalaIds)->pluck('name')->toArray();

        $data['possibleKerusakan'] = $this->forwardChaining($selectedGejalaIds);

        $activityDescription = json_encode([
            'message' => 'result',
            'data' => $data['possibleKerusakan'],
            'selectedGejalaNames' => $selectedGejalaNames, // Mengirim nama gejala ke tampilan
        ]);

        activity()->log($activityDescription);


        // Menampilkan tampilan dengan data yang diperlukan
        return view('frontend.diagnosa.result', [
            'data' => $data,
            'selectedGejalaNames' => $selectedGejalaNames,
            'selectedGejalaIds' => $selectedGejalaIds,
        ]);
    }

    private function forwardChaining($selectedGejalaIds)
    {
        // Menghitung berapa kali setiap kerusakan muncul
        $kerusakanCount = [];

        // Ambil semua aturan (Knowlidge) dari tabel
        $knowlidges = Knowlidge::all();

        foreach ($knowlidges as $knowlidge) {
            // Ambil gejala-gejala dari Knowlidge ini
            $gejalaIdsAturan = explode(',', $knowlidge->gejala_id);

            // Cek apakah semua gejala dari Knowlidge ada dalam gejala yang dipilih
            if (empty(array_diff($gejalaIdsAturan, $selectedGejalaIds))) {
                $kerusakanId = $knowlidge->kerusakan_id;

                // Menghitung berapa kali setiap kerusakan muncul
                if (!isset($kerusakanCount[$kerusakanId])) {
                    $kerusakanCount[$kerusakanId] = 1;
                } else {
                    $kerusakanCount[$kerusakanId]++;
                }
            }
        }

        // Mengurutkan kerusakan berdasarkan jumlah gejala yang cocok secara menurun
        arsort($kerusakanCount);

        // Mengambil kerusakan dengan gejala terbanyak
        $mostLikelyKerusakanId = key($kerusakanCount);

        // Mengambil nama dan solusi dari kerusakan yang paling mungkin
        $mostLikelyKerusakan = Kerusakan::find($mostLikelyKerusakanId);

        // Mengambil data Education yang terkait dengan Kerusakan
        $relatedEducation = $mostLikelyKerusakan->education;



        return [
            'name' => $mostLikelyKerusakan->name,
            'solusi' => $mostLikelyKerusakan->description,
            'education' => is_array($relatedEducation) || is_object($relatedEducation) ? [
                'title' => $relatedEducation->title,
                'category' => $relatedEducation->category,
                'video1' => $relatedEducation->video1,
                'video2' => $relatedEducation->video2,
                'video3' => $relatedEducation->video3,
                'video4' => $relatedEducation->video4,
                'video5' => $relatedEducation->video5,
                // tambahkan kolom video lain yang ingin Anda tampilkan
            ] : null,
        ];
    }
}
