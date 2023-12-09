<?php

namespace App\Imports;

use App\Models\Knowlidge;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KnowlidgeImport implements ToModel
{

    public function model(array $row)
    {

        return new Knowlidge([
            'code' => $row[1], // Kolom "Name" pada Excel
            'name' => $row[2], // Kolom "Email" pada Excel
        ]);
    }
}
