<?php

namespace App\Http\Controllers;

use App\Imports\GejalaImport;
use App\Models\Gejala;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;


class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gejalas = Gejala::all();
        return view('pages.gejala.index', compact('gejalas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.gejala.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:gejalas,code',
            'name' => 'required|string'
        ]);

        $code = $request->input('code');
        $name = $request->input('name');

        $existingGejala = Gejala::where('code', $code)->first();

        if ($existingGejala) {
            // jika data yang sama sudah ada
            return redirect()->route('gejala.index')->with('error', 'kode sudah ada');
        }

        $gejala = new Gejala();
        $gejala->code = $code;
        $gejala->name = $name;
        $gejala->save();

        Alert::success('Gejala successfully');
        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil disimpan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gejala = Gejala::findOrFail($id);
        return view('pages.gejala.edit', compact('gejala'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|unique:gejalas,code,' . $id,
            'name' => 'required|string'
        ]);

        $code = $request->input('code');
        $name = $request->input('name');

        $gejala = Gejala::findOrFail($id);

        $existingGejala = Gejala::where('code', $code)->where('id', '!=', $id)->first();

        if ($existingGejala) {
            return redirect()->route('gejala.index')->with('error', 'kode sudah ada');
        }

        $gejala->code = $code;
        $gejala->name = $name;
        $gejala->save();
        Alert::success('Gejala berhasil diperbarui')->autoClose(3000);

        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->delete();

        Alert::success('Gejala berhasil dihapus')->autoClose(3000);
        return redirect()->route('gejala.index');
    }

    public function import()
    {
        try {
            Excel::import(new GejalaImport, request()->file('file'));
            Alert::success('success')->autoClose(3000);
            return redirect()->route('gejala.index');
        } catch (\Exception $e) {
            Alert::error('Error', 'An error occurred while importing the file.');
            return redirect()->back();
        }
    }
}
