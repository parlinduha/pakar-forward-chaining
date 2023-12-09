<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejalas';

    protected $fillable = [
        'code',
        'name',
    ];

    public function knowlidges()
    {
        return $this->hasMany(Knowlidge::class, 'gejala_id');
    }

    public function kerusakan()
    {
        return $this->belongsTo(Kerusakan::class, 'kerusakan_id');
    }
}
