<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Kerusakan;
use App\Models\Knowlidge;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use RealRashid\SweetAlert\Facades\Alert;

class KnowlidgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['knowlidges'] = Knowlidge::with('gejala', 'kerusakan')->get();
        return view('pages.expert.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gejalas = Gejala::all();
        $kerusakans = Kerusakan::all();

        return view('pages.expert.create', compact('gejalas', 'kerusakans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gejala_id' => 'required',
            'kerusakan_id' => 'required',
        ]);

        $existingKnolidge = Knowlidge::where('gejala_id', $request->input('gejala_id'))->where('kerusakan_id', $request->input('kerusakan_id'))->first();

        if ($existingKnolidge) {
            Alert::error('error', 'Data dengan kombinasi gejala dan kerusakan ini sudah ada.');
            return redirect()->route('knowlidge.create');
        }
        $knowlidge = new Knowlidge();
        $knowlidge->gejala_id = $request->input('gejala_id');
        $knowlidge->kerusakan_id = $request->input('kerusakan_id');
        $knowlidge->save();

        Alert::success('success');
        return redirect()->route('knowlidge.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $knowlidges = Knowlidge::findOrFail($id);
        $gejalas = Gejala::all();
        $kerusakans = Kerusakan::all();

        return view('pages.expert.edit', compact('gejalas', 'kerusakans', 'knowlidges'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gejala_id' => 'required',
            'kerusakan_id' => 'required',
            'description' => 'required|string',
        ]);

        $knowlidge = Knowlidge::find($id);

        if (!$knowlidge) {
            return redirect()->route('knowlidge.index')->with('error', 'Data tidak ditemukan.');
        }

        $existingKnowlidge = Knowlidge::where('gejala_id', $request->input('gejala_id'))
            ->where('kerusakan_id', $request->input('kerusakan_id'))
            ->where('id', '!=', $id)
            ->first();

        if ($existingKnowlidge) {
            return redirect()->route('knowlidge.edit', $id)->with('error', 'Data dengan kombinasi gejala dan kerusakan ini sudah ada.');
        }

        // Update data dengan nilai yang baru
        $knowlidge->gejala_id = $request->input('gejala_id');
        $knowlidge->kerusakan_id = $request->input('kerusakan_id');
        $knowlidge->description = $request->input('description');
        $knowlidge->save();

        Alert::success('success');
        return redirect()->route('knowlidge.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $knowlidge = Knowlidge::findOrFail($id);
        $knowlidge->delete();

        Alert::success('success');
        return redirect()->route('knowlidge.index');
    }
}
