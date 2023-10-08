<?php

namespace Database\Seeders;

use App\Models\Kerusakan;
use Illuminate\Database\Seeder;

class KerusakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kerusakanData = [
            [
                'code' => 'K01',
                'name' => 'MONITOR RUSAK',
                'description' => 'Jika monitor mengalami kerusakan, langkah pertama adalah memeriksa koneksi kabel dan daya listrik. Pastikan monitor menerima daya yang cukup. Jika masih tidak berfungsi, pertimbangkan untuk mengganti atau memperbaiki monitor.'
            ],
            [
                'code' => 'K02',
                'name' => 'MEMORI RUSAK',
                'description' => 'Ketika komputer mengalami masalah memori, pastikan RAM terpasang dengan benar dan cobalah membersihkan kontak RAM. Jika masalah masih ada, pertimbangkan untuk mengganti modul RAM yang rusak.'
            ],
            [
                'code' => 'K03',
                'name' => 'HDD RUSAK',
                'description' => 'Jika HDD mengalami kerusakan, periksa kabel dan koneksi HDD. Jika ada suara aneh, matikan komputer segera untuk menghindari kerusakan lebih lanjut. Pertimbangkan penggantian HDD dan pemulihan data jika diperlukan.'
            ],
            [
                'code' => 'K04',
                'name' => 'VGA RUSAK',
                'description' => 'Jika masalah terkait dengan kartu grafis, pastikan kabel VGA atau HDMI terhubung dengan baik. Perbarui driver kartu grafis, dan jika masih bermasalah, pertimbangkan penggantian kartu grafis.'
            ],
            [
                'code' => 'K05',
                'name' => 'SOUND CARD RUSAK',
                'description' => 'Jika sound card bermasalah, periksa driver dan perbarui jika diperlukan. Jika masalah berlanjut, pertimbangkan penggantian sound card atau gunakan perangkat audio eksternal.'
            ],
            [
                'code' => 'K06',
                'name' => 'OS BERMASALAH',
                'description' => 'Masalah pada sistem operasi dapat diatasi dengan pemulihan sistem atau reinstallasi sistem operasi untuk memperbaikinya.'
            ],
            [
                'code' => 'K07',
                'name' => 'APLIKASI RUSAK',
                'description' => 'Masalah pada sistem operasi dapat diatasi dengan pemulihan sistem atau reinstallasi sistem operasi untuk memperbaikinya.'
            ],
            [
                'code' => 'K08',
                'name' => 'POWER SUPLEY RUSAK',
                'description' => 'Matikan komputer dan ganti power supply yang rusak. Pastikan yang baru memiliki daya yang cukup untuk semua komponen.'
            ],
            [
                'code' => 'K09',
                'name' => 'PROSESOR RUSAK',
                'description' => 'Jika prosesor bermasalah, perlu penggantian prosesor yang sesuai.'
            ],
            [
                'code' => 'K10',
                'name' => 'MEMORY KURANG (PERLU UPGRADE MEMORY)',
                'description' => 'Pertimbangkan menambahkan modul RAM tambahan atau mengganti RAM dengan kapasitas yang lebih besar.'
            ],
            [
                'code' => 'K11',
                'name' => 'MEMORY VGA KURANG (PERLU UPGRADE MEMORY)',
                'description' => 'Jika masalah terkait dengan kartu grafis, pertimbangkan mengganti kartu grafis dengan kapasitas VRAM yang lebih besar.'
            ],
            [
                'code' => 'K12',
                'name' => 'CLOCK PROSESOR KURANG TINGGI (PERLU UPGRADE PROSESOR)',
                'description' => 'Jika masalah terkait dengan kinerja prosesor, pertimbangkan mengganti prosesor dengan yang lebih kuat.'
            ],
            [
                'code' => 'K13',
                'name' => 'KABEL IDE RUSAK',
                'description' => 'Ganti kabel IDE yang rusak dengan yang baru.'
            ],
            [
                'code' => 'K14',
                'name' => 'KURANG DAYA PADA POWER SUPLEY (PERLU UPGRADE POWER SUPLEY)',
                'description' => 'Jika masalah terkait daya, pertimbangkan mengganti power supply dengan kapasitas yang lebih besar.'
            ],
            [
                'code' => 'K15',
                'name' => 'PERANGKAT USB RUSAK',
                'description' => 'Ganti perangkat USB yang rusak dengan yang baru.'
            ],
            [
                'code' => 'K16',
                'name' => 'KEYBORD RUSAK',
                'description' => 'Ganti keyboard yang rusak dengan yang baru.'
            ],
            [
                'code' => 'K17',
                'name' => 'MOUSE RUSAK',
                'description' => 'Ganti mouse yang rusak dengan yang baru.'
            ],
            [
                'code' => 'K18',
                'name' => 'MOTHERBORD RUSAK/IC REGULATOR',
                'description' => 'Jika motherboard atau IC regulator rusak, perlu penggantian motherboard.'
            ],
            [
                'code' => 'K19',
                'name' => 'CHARGER RUSAK',
                'description' => 'Ganti charger yang rusak dengan yang baru.'
            ],
            [
                'code' => 'K20',
                'name' => 'HARDISK RUSAK 2',
                'description' => 'Jika ada masalah dengan hardisk kedua, pertimbangkan penggantian hardisk tersebut.'
            ],
            [
                'code' => 'K21',
                'name' => 'POWER SUPLEY RUSAK 2',
                'description' => 'Ganti power supply yang kedua rusak dengan yang baru jika diperlukan.'
            ],
        ];

        // Insert data ke tabel 'kerusakan'
        foreach ($kerusakanData as $data) {
            Kerusakan::create($data);
        }
    }
}
