<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Gejala;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class WelcomeController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        $categoryCounts = [];

        foreach ($educations as $edu) {
            $category = $edu->category;

            if (!isset($categoryCounts[$category])) {
                $categoryCounts[$category] = 1;
            } else {
                $categoryCounts[$category]++;
            }
        }

        // Sort the categories by count in descending order
        arsort($categoryCounts);

        // Get the top 5 categories
        $topCategories = array_slice($categoryCounts, 0, 5);

        return view('frontend.index', compact('educations', 'topCategories'));
    }


    public function diagnosa()
    {
        $gejalas = Gejala::all();
        return view('frontend.diagnosa.index', compact('gejalas'));
    }

    public function edukasi()
    {
        $educations = Education::whereNotNull('video1')
            ->orWhereNotNull('video2')
            ->orWhereNotNull('video3')
            ->orWhereNotNull('video4')
            ->orWhereNotNull('video5')
            ->get();
        return view('frontend.edukasi.index', compact('educations'));
    }

    public function about()
    {
        return view('frontend.about.index');
    }
    public function profile()
    {
        return view('frontend.profile.index');
    }
    public function edit_profile()
    {
        return view('frontend.profile.edit');
    }
    public function update_profile(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming you want to validate the image file
        ]);

        $user = User::findOrFail($id);

        // Update name if provided
        if ($request->has('name')) {
            $user->name = $request->input('name');
        }

        // Update email if provided
        if ($request->has('email')) {
            $user->email = $request->input('email');
        }

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $user->image = $imagePath;
        }

        $user->save();
        Alert('Success');
        return redirect()->route('user.profile')->with('success', 'Profile updated successfully');
    }

    public function edit_password()
    {
        return view('frontend.profile.password');
    }
    public function update_password(Request $request, $id)
    {
        // Validasi input dari formulir
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Mengambil user berdasarkan ID
        $user = User::find($id);

        // Mengganti password user dengan password baru yang di-hash
        $user->password = Hash::make($request->password);

        // Menyimpan perubahan
        $user->save();
        Alert('Success');
        // Redirect ke halaman profil atau rute lain yang sesuai
        return redirect()->route('user.profile')->with('success', 'Password berhasil diperbarui!');
    }
}
