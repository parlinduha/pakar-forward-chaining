<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

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
}
