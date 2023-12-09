<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gejala = [
            [
                'code' => 'G01',
                'name' => 'Tombol hidup tapi tidak ada gambar tertampil di monitor',
            ],
            [
                'code' => 'G02',
                'name' => 'Terdapat garis horisontal/vertikal ditengah monitor',
            ],
            [
                'code' => 'G03',
                'name' => 'Tidak ada tampilan awal bios',
            ],
            [
                'code' => 'G04',
                'name' => 'Muncul Pesan eror pada bios (isi pesan selalu berbeda tergantung pada kondisi tertentu)',
            ],
            [
                'code' => 'G05',
                'name' => 'Alarm bios berbunyi',
            ],
            [
                'code' => 'G06',
                'name' => 'Terdengar suara aneh pada HDD',
            ],
            [
                'code' => 'G07',
                'name' => 'Sering terjadi hang/crash saat menjalankan aplikasi',
            ],
            [
                'code' => 'G08',
                'name' => 'Selalu Scandisk ketika booting',
            ],
            [
                'code' => 'G09',
                'name' => 'Muncul pesan error saat menjalankan game atau aplikasi gratis',
            ],
            [
                'code' => 'G10',
                'name' => 'Device driver informasi tidak terdeteksi dalam device manager, meski driver telah di install',
            ],
            [
                'code' => 'G11',
                'name' => 'Tiba-tiba OS melakukan restart otomatis',
            ],
            [
                'code' => 'G12',
                'name' => 'Keluarnya blue screen pada OS Windows (isi pesan selalu berbeda tergantung pada kondisi tertentu)',
            ],
            [
                'code' => 'G13',
                'name' => 'Suara tetap tidak keluar meskipun driver dan setting device telah dilakukan sesuai petunjuk',
            ],
            [
                'code' => 'G14',
                'name' => 'Muncul pesan error saat menjalankan aplikasi audio',
            ],
            [
                'code' => 'G15',
                'name' => 'Muncul pesan error saat pertama OS di load dari HDD',
            ],
            [
                'code' => 'G16',
                'name' => 'Tidak ada tanda-tanda dari sebagian/seluruh perangkat bekerja (semua kipas pendingin tidak berputar)',
            ],
            [
                'code' => 'G17',
                'name' => 'Sering tiba-tiba mati tanpa sebab',
            ],
            [
                'code' => 'G18',
                'name' => 'Muncul pesan pada windows, bahwa windows kekurangan virtual memori',
            ],
            [
                'code' => 'G19',
                'name' => 'Aplikasi berjalan dengan lambat, respon yang lambat terhadap inputan',
            ],
            [
                'code' => 'G20',
                'name' => 'Kinerja grafis terasa sangat berat (biasanya dalam game dan manipulasi gambar)',
            ],
            [
                'code' => 'G21',
                'name' => 'Device tidak terdeteksi dalam bios',
            ],
            [
                'code' => 'G22',
                'name' => 'Informasi deteksi yang salah dalam bios',
            ],
            [
                'code' => 'G23',
                'name' => 'Hanya sebagian/seluruh perangkat yang bekerja',
            ],
            [
                'code' => 'G24',
                'name' => 'Sebagian/seluruh karakter inputan mati',
            ],
            [
                'code' => 'G25',
                'name' => 'Pointer mouse tidak merespon gerakan mouse',
            ],
            [
                'code' => 'G26',
                'name' => 'Tampak blok hitam, dan gambar tidak simetris/acak',
            ],
            [
                'code' => 'G27',
                'name' => 'Keluar bunyi beep panjang pada saat laptop dinyalakan',
            ],
            [
                'code' => 'G28',
                'name' => 'Di hidupkan agak sulit',
            ],
            [
                'code' => 'G29',
                'name' => 'Baterai tidak mau di charge',
            ],
            [
                'code' => 'G30',
                'name' => 'Tidak ada indikasi masuk power',
            ],
            [
                'code' => 'G31',
                'name' => 'Mati total',
            ],
            [
                'code' => 'G32',
                'name' => 'Laptop di charge posisi hidup kemudian tiba-tiba mati layar',
            ],
            [
                'code' => 'G33',
                'name' => 'Keluar beep berulang-ulang kali',
            ],
            [
                'code' => 'G34',
                'name' => 'Belum sampai windows sudah restart lagi',
            ],
            [
                'code' => 'G35',
                'name' => 'Tidak ada suara dari speaker internal maupun eksternal',
            ],
            [
                'code' => 'G36',
                'name' => 'Performa komputer sangat lambat, bahkan setelah membersihkan virus dan malware',
            ],
            [
                'code' => 'G37',
                'name' => 'Tidak bisa terhubung ke jaringan Wi-Fi atau internet secara nirkabel',
            ],
            [
                'code' => 'G38',
                'name' => 'Layar komputer berkedip atau berfluktuasi secara acak',
            ],
        ];

        // Insert data ke tabel 'gejalas'
        DB::table('gejalas')->insert($gejala);
    }
}
