<?php

namespace App\Http\Controllers;

use App\Imports\KerusakanImport;
use App\Models\Education;
use App\Models\Kerusakan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class KerusakanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kerusakans = Kerusakan::all();
        return view('pages.kerusakan.index', compact('kerusakans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $educations = Education::all();
        return view('pages.kerusakan.create', compact('educations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:kerusakans,code',
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $code = $request->input('code');
        $name = $request->input('name');
        $description = $request->input('description');

        $existingKerusakan = Kerusakan::where('code', $code)->first();

        if ($existingKerusakan) {
            // jika data yang sama sudah ada
            return redirect()->route('kerusakan.index')->with('error', 'kode sudah ada');
        }

        $kerusakan = new Kerusakan();
        $kerusakan->code = $code;
        $kerusakan->name = $name;
        $kerusakan->description = $description;
        $kerusakan->save();

        Alert::success('Success');
        return redirect()->route('kerusakan.index')->with('success', 'Kerusakan berhasil disimpan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $educations = Education::all();
        $kerusakan = Kerusakan::findOrFail($id);
        return view('pages.kerusakan.edit', compact('kerusakan', 'educations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|unique:kerusakans,code,' . $id,
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $code = $request->input('code');
        $name = $request->input('name');
        $description = $request->input('description');
        $education_id = $request->input('education_id');

        $kerusakan = Kerusakan::findOrFail($id);

        $existingKerusakan = Kerusakan::where('code', $code)->where('id', '!=', $id)->first();

        if ($existingKerusakan) {
            return redirect()->route('kerusakan.index')->with('error', 'kode sudah ada');
        }

        $kerusakan->code = $code;
        $kerusakan->name = $name;
        $kerusakan->description = $description;
        $kerusakan->education_id = $education_id;
        $kerusakan->save();
        Alert::success('Success')->autoClose(3000);

        return redirect()->route('kerusakan.index')->with('success', 'Kerusakan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kerusakan = Kerusakan::findOrFail($id);
        $kerusakan->delete();

        Alert::success('Success')->autoClose(3000);
        return redirect()->route('kerusakan.index');
    }

    public function import()
    {
        try {
            Excel::import(new KerusakanImport, request()->file('file'));
            Alert::success('success')->autoClose(3000);
            return redirect()->route('kerusakan.index');
        } catch (\Exception $e) {
            Alert::error('Error', 'An error occurred while importing the file.');
            return redirect()->back();
        }
    }
}
