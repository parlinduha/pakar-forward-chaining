<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Kerusakan;
use App\Models\Knowlidge;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class KonsultasiController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('pages.konsultasi.index', compact('gejalas'));
    }

    public function consult(Request $request)
    {
        $selectedGejalaIds = $request->input('gejala_id');
        $data['possibleKerusakan'] = $this->forwardChaining($selectedGejalaIds);



        // return view('pages.konsultasi.result', compact('data'));
        return view('frontend.diagnosa.result', compact('data'));
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
