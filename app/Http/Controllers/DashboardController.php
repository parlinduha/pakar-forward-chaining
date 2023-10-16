<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Gejala;
use App\Models\Kerusakan;
use App\Models\Knowlidge;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $gejalas = Gejala::count();
        $kerusakans = Kerusakan::count();
        $educations = Education::count();
        $relasi = Knowlidge::count();



        return view('dashboard', compact('users', 'gejalas', 'kerusakans', 'educations', 'relasi'));
    }

    public function profile()
    {
        return view('pages.profile.index');
    }

    public function img_profile(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi tipe dan ukuran file gambar
        ]);

        if ($request->hasFile('image')) {
            // Simpan gambar di direktori public/profile_images
            $imagePath = $request->file('image')->store('profile_images', 'public');

            $user = User::findOrFail($id);

            $user->image = $imagePath;
            $user->save();

            alert()->success('Success', 'Image uploaded successfully');
            return redirect()->back();
        } else {
            alert()->error('Error', 'Failed to upload image');
            return redirect()->back();
        }
    }

    public function update_profile(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);

        // Update name and email
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        alert()->success('Success', 'Profile updated successfully');
        return redirect()->back();
    }

    public function update_password(Request $request, $id)
    {
        // Validasi input dari formulir
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Mengambil user berdasarkan ID
        $user = User::findOrFail($id);

        // Mengganti password user dengan password baru yang di-hash
        $user->password = Hash::make($request->password);

        // Menyimpan perubahan
        $user->save();

        alert()->success('Success', 'Password updated successfully');
        // Redirect ke halaman profil atau rute lain yang sesuai
        return redirect()->back();
    }
}
