<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\FlareClient\Http\Response as HttpResponse;

class EducationController extends Controller
{
    public function index()
    {
        $education = Education::all();
        return view('pages.edukasi.index', compact('education'));
    }

    public function create()
    {
        return view('pages.edukasi.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'category' => 'required|string',
            'videos.*' => 'file|mimes:mp4,mov,avi,wmv|max:200000', // Max file size: 200MB
        ]);

        // Menginisialisasi array untuk menyimpan nama-nama file video
        $videoNames = [];

        // Mengunggah dan menyimpan setiap file video jika ada
        if ($request->hasFile('videos')) {
            foreach ($request->file('videos') as $video) {
                $videoName = time() . '_' . $video->getClientOriginalName();
                $video->storeAs('public/videos', $videoName); // Simpan video di direktori 'public/videos'
                $videoNames[] = $videoName;
            }
        }

        // Simpan data ke database
        $education = new Education();
        $education->category = $request->input('category');

        // Menggabungkan nama-nama file video menjadi string dan menyimpannya di kolom 'video1' hingga 'video5'
        $education->video1 = isset($videoNames[0]) ? $videoNames[0] : null;
        $education->video2 = isset($videoNames[1]) ? $videoNames[1] : null;
        $education->video3 = isset($videoNames[2]) ? $videoNames[2] : null;
        $education->video4 = isset($videoNames[3]) ? $videoNames[3] : null;
        $education->video5 = isset($videoNames[4]) ? $videoNames[4] : null;

        $education->save();

        Alert::success('Success');

        return redirect()->route('edu.index')->with('success', 'Data berhasil disimpan.');
    }


    public function edit($id)
    {
        $edu = Education::findOrFail($id);
        return view('pages.edukasi.edit', compact('edu'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'videos.*' => 'file|mimes:mp4,mov,avi,wmv|max:200000', // Max file size: 200MB
        ]);

        // Menginisialisasi array untuk menyimpan nama-nama file video
        $videoNames = [];

        // Mengunggah dan menyimpan setiap file video jika ada
        if ($request->hasFile('videos')) {
            foreach ($request->file('videos') as $video) {
                $videoName = time() . '_' . $video->getClientOriginalName();
                $video->storeAs('public/videos', $videoName); // Simpan video di direktori 'public/videos'
                $videoNames[] = $videoName;
            }
        }

        // Temukan data Education yang akan diperbarui
        $education = Education::findOrFail($id);

        // Perbarui data dalam database
        $education->title = $request->input('title');
        $education->category = $request->input('category');

        // Menggabungkan nama-nama file video menjadi string dan menyimpannya di kolom 'video1' hingga 'video5'
        $education->video1 = isset($videoNames[0]) ? $videoNames[0] : null;
        $education->video2 = isset($videoNames[1]) ? $videoNames[1] : null;
        $education->video3 = isset($videoNames[2]) ? $videoNames[2] : null;
        $education->video4 = isset($videoNames[3]) ? $videoNames[3] : null;
        $education->video5 = isset($videoNames[4]) ? $videoNames[4] : null;

        $education->save();

        Alert::success('Success');

        return redirect()->route('edu.index')->with('success', 'Data berhasil diperbarui.');
    }



    public function destroy($id)
    {
        $edu = Education::findOrFail($id);
        $edu->delete();

        Alert::success('Success');
        return redirect()->route('edu.index')->with('success', 'Data berhasil diperbarui.');
    }
}
