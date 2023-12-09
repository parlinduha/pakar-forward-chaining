<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        // Periksa apakah email sudah ada dalam database
        $existingUser = User::where('email', $email)->first();

        if ($existingUser) {
            // Jika data yang sama sudah ada
            return redirect()->route('user.index')->with('error', 'Email sudah ada');
        }

        // Buat instance User
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->role = 'user';

        $user->save();

        Alert::success('User berhasil disimpan')->autoClose(3000);

        return redirect()->route('user.index')->with('success', 'User berhasil disimpan.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = 'user';

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|confirmed'
            ]);
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        Alert::success('User berhasil disimpan')->autoClose(3000);
        return redirect()->route('user.index')->with('success', 'User berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        Alert::success('User berhasil dihapus')->autoClose(3000);
        return redirect()->route('user.index');
    }
}
