<?php

namespace App\Imports;

use App\Models\Gejala;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GejalaImport implements ToModel
{

    public function model(array $row)
    {

        return new Gejala([
            'code' => $row[1], // Kolom "Name" pada Excel
            'name' => $row[2], // Kolom "Email" pada Excel
        ]);
    }
}
