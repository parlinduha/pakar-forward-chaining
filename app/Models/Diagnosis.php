<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'selected_symptoms', 'result'];

    // Definisikan hubungan dengan model User jika diperlukan
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Metode untuk mendapatkan gejala yang dipilih dalam bentuk array
    public function getSelectedSymptomsAttribute($value)
    {
        return json_decode($value, true);
    }

    // Metode untuk menyimpan gejala yang dipilih dalam bentuk JSON saat menyimpan ke basis data
    public function setSelectedSymptomsAttribute($value)
    {
        $this->attributes['selected_symptoms'] = json_encode($value);
    }
}
