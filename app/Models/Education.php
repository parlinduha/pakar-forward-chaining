<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'education';

    protected $fillable = [
        'category',
        'video1',
        'video2',
        'video3',
        'video4',
        'video5',
    ];


    public function kerusakan()
    {
        return $this->hasOne(Kerusakan::class);
    }
}
