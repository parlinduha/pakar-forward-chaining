<?php

namespace Database\Seeders;

use App\Models\Knowlidge;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KnowlidgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data berdasarkan ID Gejala dan ID Kerusakan
        $knowledgeData = [
            [
              'gejala_id' => 28,
              'kerusakan_id'   => 18
            ],
            [
              'gejala_id' => 31,
              'kerusakan_id'  => 18
            ],
            [
              'gejala_id' => 29,
              'kerusakan_id'  => 19
            ],
            [
              'gejala_id' => 30,
              'kerusakan_id'  => 19
            ],
            [
              'gejala_id' => 32,
              'kerusakan_id'  => 19
            ],
            [
              'gejala_id' => 1,
              'kerusakan_id'  => 1
            ],
            [
              'gejala_id' => 2,
              'kerusakan_id'  => 1
            ],
            [
              'gejala_id' => 26,
              'kerusakan_id'  => 1
            ],
            [
              'gejala_id' => 3,
              'kerusakan_id'  => 2
            ],
            [
              'gejala_id' => 4,
              'kerusakan_id'  => 2
            ],
            [
              'gejala_id' => 5,
              'kerusakan_id'  => 2
            ],
            [
              'gejala_id' => 11,
              'kerusakan_id'  => 2
            ],
            [
              'gejala_id' => 12,
              'kerusakan_id'  => 2
            ],
            [
              'gejala_id' => 33,
              'kerusakan_id'  => 2
            ],
            [
              'gejala_id' => 6,
              'kerusakan_id'  => 3
            ],
            [
              'gejala_id' => 7,
              'kerusakan_id'  => 3
            ],
            [
              'gejala_id' => 8,
              'kerusakan_id'  => 3
            ],
            [
              'gejala_id' => 10,
              'kerusakan_id'  => 3
            ],
            [
              'gejala_id' => 21,
              'kerusakan_id'  => 3
            ],
            [
              'gejala_id' => 22,
              'kerusakan_id'  => 3
            ],
            [
              'gejala_id' => 34,
              'kerusakan_id'  => 3
            ],
            [
              'gejala_id' => 1,
              'kerusakan_id'  => 4
            ],
            [
              'gejala_id' => 3,
              'kerusakan_id'  => 4
            ],
            [
              'gejala_id' => 5,
              'kerusakan_id'  => 4
            ],
            [
              'gejala_id' => 9,
              'kerusakan_id'  => 4
            ],
            [
              'gejala_id' => 10,
              'kerusakan_id'  => 4
            ],
            [
              'gejala_id' => 12,
              'kerusakan_id'  => 4
            ],
            [
              'gejala_id' => 13,
              'kerusakan_id'  => 4
            ],
            [
              'gejala_id' => 34,
              'kerusakan_id'  => 4
            ],
            [
              'gejala_id' => 10,
              'kerusakan_id'  => 5
            ],
            [
              'gejala_id' => 13,
              'kerusakan_id'  => 5
            ],
            [
              'gejala_id' => 14,
              'kerusakan_id'  => 5
            ],
            [
              'gejala_id' => 11,
              'kerusakan_id'  => 6
            ],
            [
              'gejala_id' => 15,
              'kerusakan_id'  => 6
            ],
            [
              'gejala_id' => 7,
              'kerusakan_id'  => 7
            ],
            [
              'gejala_id' => 12,
              'kerusakan_id'  => 7
            ],
            [
              'gejala_id' => 16,
              'kerusakan_id'  => 8
            ],
            [
              'gejala_id' => 17,
              'kerusakan_id'  => 8
            ],
            [
              'gejala_id' => 1,
              'kerusakan_id'  => 9
            ],
            [
              'gejala_id' => 3,
              'kerusakan_id'  => 9
            ],
            [
              'gejala_id' => 4,
              'kerusakan_id'  => 9
            ],
            [
              'gejala_id' => 5,
              'kerusakan_id'  => 9
            ],
            [
              'gejala_id' => 18,
              'kerusakan_id'  => 10
            ],
            [
              'gejala_id' => 19,
              'kerusakan_id'  => 10
            ],
            [
              'gejala_id' => 9,
              'kerusakan_id'  => 11
            ],
            [
              'gejala_id' => 20,
              'kerusakan_id'  => 11
            ],
            [
              'gejala_id' => 19,
              'kerusakan_id'  => 12
            ],
            [
              'gejala_id' => 21,
              'kerusakan_id'  => 13
            ],
            [
              'gejala_id' => 5,
              'kerusakan_id'  => 14
            ],
            [
              'gejala_id' => 23,
              'kerusakan_id'  => 14
            ],
            [
              'gejala_id' => 10,
              'kerusakan_id'  => 15
            ],
            [
              'gejala_id' => 24,
              'kerusakan_id'  => 16
            ],
            [
              'gejala_id' => 27,
              'kerusakan_id'  => 16
            ],
            [
              'gejala_id' => 25,
              'kerusakan_id'  => 17
            ],
            [
              'gejala_id' => 36,
              'kerusakan_id'  => 20
            ],
            [
              'gejala_id' => 10,
              'kerusakan_id'  => 20
            ],
            [
              'gejala_id' => 21,
              'kerusakan_id'  => 20
            ],
            [
              'gejala_id' => 37,
              'kerusakan_id'  => 21
            ],
            [
              'gejala_id' => 38,
              'kerusakan_id'  => 18
            ],
        ];


        foreach ($knowledgeData as $data) {
            Knowlidge::create($data);
        }
    }
}
