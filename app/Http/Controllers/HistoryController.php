<?php

namespace App\Http\Controllers;

use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class HistoryController extends Controller
{
    public function index()
    {
        $activities = Activity::latest()->get();

        $formattedActivities = [];

        foreach ($activities as $activity) {
            $description = json_decode($activity->description, true);

            if (isset($description['data'])) {
                $formattedActivities[] = [
                    'name' => $activity->causer->name,
                    'email' => $activity->causer->email,
                    'hasil' => $description['data']['name'],
                    'solusi_kerusakan' => $description['data']['solusi'],
                    'created_at' => $activity->created_at->format('Y-m-d H:i:s'),
                ];
            }
        }
        return view('pages.history.index', compact('formattedActivities'));
        // return response()->json(['data' => $formattedActivities]);
    }
    public function exportPDF()
    {
        $activities = Activity::latest()->get();

        $imageDirectory = public_path('images');
        $imageFiles = scandir($imageDirectory);
        $filteredImageFiles = array_diff($imageFiles, ['.', '..']); // Menghapus entri '.' dan '..' dari daftar

        $formattedActivities = [];

        foreach ($activities as $activity) {
            $description = json_decode($activity->description, true);

            if (isset($description['data'])) {
                $formattedActivities[] = [
                    'name' => $activity->causer->name,
                    'email' => $activity->causer->email,
                    'hasil' => $description['data']['name'],
                    'solusi_kerusakan' => $description['data']['solusi'],
                    'created_at' => $activity->created_at->format('Y-m-d H:i:s'),
                ];
            }
        }

        $pdf = PDF::loadView('pages.history.pdf', compact('formattedActivities', 'filteredImageFiles'));

        return $pdf->download('activities.pdf');
    }
}
