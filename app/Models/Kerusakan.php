<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    use HasFactory;
    protected $table = 'kerusakans';

    protected $fillable = [
        'code',
        'name',
        'description',
    ];

    public function knowlidges()
    {
        return $this->hasMany(Knowlidge::class, 'kerusakan_id');
    }

    public function gejala()
    {
        return $this->hasMany(Gejala::class, 'kerusakan_id');
    }

    // public function educations()
    // {
    //     return $this->belongsToMany(Education::class, 'kerusakan_education', 'kerusakan_id', 'education_id'); // Ubah urutan kolom dalam belongsToMany
    // }

    public function education()
    {
        return $this->belongsTo(Education::class);
    }
}
