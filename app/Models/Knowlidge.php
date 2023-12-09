<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowlidge extends Model
{
    use HasFactory;

    protected $table = 'knowlidges';

    protected $fillable = [
        'gejala_id',
        'kerusakan_id',

    ];

    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'gejala_id');
    }

    public function kerusakan()
    {
        return $this->belongsTo(Kerusakan::class, 'kerusakan_id');
    }
}
