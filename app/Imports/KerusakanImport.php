<?php

namespace App\Imports;

use App\Models\Kerusakan;
use Maatwebsite\Excel\Concerns\ToModel;

class KerusakanImport implements ToModel
{

    public function model(array $row)
    {

        return new Kerusakan([
            'code' => $row[1], // Kolom "Name" pada Excel
            'name' => $row[2], // Kolom "Email" pada Excel
            'description' => $row[3],
        ]);
    }
}
