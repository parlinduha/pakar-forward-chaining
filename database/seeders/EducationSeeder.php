<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $edu = [
            [
                'category' => 'Catridge',
                'video1' => 'Apakah Cartridge Printer Rusak Bisa Diperbaiki.mp4',
            ],
            [
                'category' => 'Catridge',
                'video1' => 'Cara Memperbaiki catridge Printer salah Isi Tinta.mp4',
            ],
            [
                'category' => 'Catridge',
                'video1' => 'Cartridge Warna Hitam Lama Tidak Dipakai Buntu Hasil Cetak Putus Bisa Normal Kembali Pakai Cara Ini.mp4',
            ],
            [
                'category' => 'Catridge',
                'video1' => 'PEYEBAB DAN CARA MEMPERBAIKI CATRIDGE TIDAK TERBACA OLEH PRINTER.mp4',
            ],
            [
                'category' => 'Catridge',
                'video1' => 'Tutorial Dan Cara Memperbaiki Tinta Yang Meluber Di Cartridge _ How To Fix Overflowing Printer Ink.mp4',
            ],

            //Driver Software
            [
                'category' => 'Driver Software',
                'video1' => 'Cara Mengatasi Driver Printer tidak bisa di install di komputer atau laptop.mp4',
            ],
            [
                'category' => 'Driver Software',
                'video1' => 'Cara mengatasi gagal instalasi driver semua printer.mp4',
            ],
            [
                'category' => 'Driver Software',
                'video1' => 'How to fix Printer Driver Installation error _Printer driver was not installed..._ on Windows 10.mp4',
            ],
            [
                'category' => 'Driver Software',
                'video1' => 'Solusi atau cara mengatasi printer tidak terdeteksi di windows 10.mp4',
            ],
            [
                'category' => 'Driver Software',
                'video1' => 'Solusi Masalah Driver Printer Tidak bisa di Instal.mp4',
            ],

            //Drum Error
            [
                'category' => 'Drum Error',
                'video1' => 'Cara Memperbaiki Drum Error (Geser Tab Hijau) Printer Brother DCP L2540DW @gemaster.mp4',
            ],
            [
                'category' => 'Drum Error',
                'video1' => 'Cara Mengatasi Pesan Slide The Green Tab on The Drum Unit Error Fotocopy Brother _ Fotocopy kotor.mp4',
            ],
            [
                'category' => 'Drum Error',
                'video1' => 'Cara Mudah Mengatasi Slide The Green Tab On The Drum Unit Error Printer Brother.mp4',
            ],
            [
                'category' => 'Drum Error',
                'video1' => 'Mengatasi Error Printer Brother DCP L2540 DW Slide The Green Tab.mp4',
            ],
            [
                'category' => 'Drum Error',
                'video1' => 'Slide the green tab on the drum error in brother printers.mp4',
            ],

            // Encoder
            [
                'category' => 'Encoder',
                'video1' => 'BEBERAPA ERROR DARI SENSOR ENCODER PANJANG PADA PRINTER CANON _ Tutorial Printer Canon.mp4',
            ],
            [
                'category' => 'Encoder',
                'video1' => 'CARA JITU!!! Mengatasi sensor encoder disk Printer epson L3110 yang mudah terlepas _ ABDI RZK.mp4',
            ],
            [
                'category' => 'Encoder',
                'video1' => 'Cara Melepas Mengganti Memasang Sensor Encoder Panjang Printer Canon IP2770 MP237 MP258 MP287.mp4',
            ],
            [
                'category' => 'Encoder',
                'video1' => 'CARA MENGGANTI PITA SENSOR ENCODER PADA PRINTER EPSON SECARA EFESIEN!.mp4',
            ],
            [
                'category' => 'Encoder',
                'video1' => 'Encoder Kotor _ Cara Mengatasi Hasil Cetak Berbayang Printer Canon G1010 G2010 G3010 G4010.mp4',
            ],

            // Fotocopy
            [
                'category' => 'Fotocopy',
                'video1' => 'Cara Memperbaiki Canon G2000 Dipakai Fotocopy dan Scan Bergaris Hitam Tengah.mp4',
            ],
            [
                'category' => 'Fotocopy',
                'video1' => 'Cara mengatasi hasil foto copy blur_pudar pada printer brother DCP l2540dw.mp4',
            ],
            [
                'category' => 'Fotocopy',
                'video1' => 'CARA MENGATASI HASIL FOTOCOPY YANG KURANG JELAS ATAU BURAM - PRINTER BROTHER DCP.mp4',
            ],
            [
                'category' => 'Fotocopy',
                'video1' => 'Cara Mengatasi hasil print atau Foto copy bergaris.mp4',
            ],
            [
                'category' => 'Fotocopy',
                'video1' => 'Cara Setting Kualitas Foto Copy Printer Brother Best Ke Normal - Terbaru 2021.mp4',
            ],

            // Kabel Flexibel
            [
                'category' => 'Kabel Flexibel',
                'video1' => 'Cara Memperbaiki Kabel Flexi Printer Yang Rusak Ujung Konektornya Mengelupas.mp4',
            ],
            [
                'category' => 'Kabel Flexibel',
                'video1' => 'Cara Memperbaiki Kabel Flexible Printer Epson L3110 Yang Kusut Tertekuk Gampang Nyangkut Rumah Head.mp4',
            ],
            [
                'category' => 'Kabel Flexibel',
                'video1' => 'Cara Memperbaiki Mika Biru Kabel Fleksibel Printer Yang Lepas _ Mika Biru Cable Flexible Ngelupas.mp4',
            ],
            [
                'category' => 'Kabel Flexibel',
                'video1' => 'Kabel Listrik Dicolokkan Printer Nyala Sendiri Dan Tidak Bisa Dimatikan Lewat On Off _ Tombol Power.mp4',
            ],
            [
                'category' => 'Kabel Flexibel',
                'video1' => 'printer Epson L3210 paper jam dan tidak bisa print , Ganti Kabel Flexibel printer epson L3210.mp4',
            ],

            // Lampu Berkedip
            [
                'category' => 'Lampu Berkedip',
                'video1' => 'CARA MEMPERBAIKI PRINTER CANON G2010 ERROR LAMPU ORANGE BERKEDIP.mp4',
            ],
            [
                'category' => 'Lampu Berkedip',
                'video1' => 'Cara Memperbaiki Printer Epson L120 Lampu Berkedip Bergantian.mp4',
            ],
            [
                'category' => 'Lampu Berkedip',
                'video1' => 'Cara Mengatasi Printer Canon E400,MG2570,MG2577S Lampu Power Dan Alarm Kedip Bergantian.mp4',
            ],
            [
                'category' => 'Lampu Berkedip',
                'video1' => 'Cara Mengatasi Printer Canon iP2770 Lampu Kedip Bergantian.mp4',
            ],
            [
                'category' => 'Lampu Berkedip',
                'video1' => 'Printer Canon 2770 lampu orange kedip 13 kali atau kedip 16 kali, cara mudah mengatasi.mp4',
            ],

            //Paperjam
            [
                'category' => 'Paperjam',
                'video1' => 'Cara Memperbaiki Printer Epson L3110 Error Paper Jam __ How To Fix Printer Paper Jammed.mp4',
            ],
            [
                'category' => 'Paperjam',
                'video1' => 'Cara Mengatasi Printer Tidak Bisa Menarik Kertas PAPER JAM.mp4',
            ],
            [
                'category' => 'Paperjam',
                'video1' => 'PRINTER EPSON L120 PAPER JAM _ LAMPU BERKEDIP _ _Open the front cover and remove any jammed paper_.mp4',
            ],
            [
                'category' => 'Paperjam',
                'video1' => 'Printer Epson Sering Paper Jam . ini dia Caranya !!!.mp4',
            ],
            [
                'category' => 'Paperjam',
                'video1' => 'TUTORIAL ATASI PAPER JAM PRINTER CANON IP2770 CARA TERBARU 2020 , MUDAH SIMPLE DIMENGERTI.mp4',
            ],

            //Power Supply
            [
                'category' => 'Power Supply',
                'video1' => 'Cara buka adaptor atau power supply printer canon MP237.mp4',
            ],
            [
                'category' => 'Power Supply',
                'video1' => 'Cara memperbaiki Adaptor Epson Printer Power Supply Bestec Epson EP-AG210SDE _ Repair Adapter smps.mp4',
            ],
            [
                'category' => 'Power Supply',
                'video1' => 'Cara memperbaiki psu power suply printer  repairing power supply epson lx310 by Elektronik Modular.mp4',
            ],
            [
                'category' => 'Power Supply',
                'video1' => 'Cara Mengatasi Printer Epson LX-300+II Mati Total _ Ganti Power Supply Epson LX-300+ LX-300+II.mp4',
            ],
            [
                'category' => 'Power Supply',
                'video1' => 'Review Dan Cek Tegangan Power Supply Printer Canon IP2770, Masih Bagus Atau Rusak_.mp4',
            ],

            //Roller Paper
            [
                'category' => 'Roller Paper',
                'video1' => 'cara memperbaiki printer canon mp237 tidak bisa narik kertas.mp4',
            ],
            [
                'category' => 'Roller Paper',
                'video1' => 'Cara Memperbaiki Printer Epson L1210 Tidak Bisa Narik Kertas Dan Roll Kecil Lepas.mp4',
            ],
            [
                'category' => 'Roller Paper',
                'video1' => 'Cara Mengatasi Printer Tidak Bisa Menarik Kertas PAPER JAM.mp4',
            ],
            [
                'category' => 'Roller Paper',
                'video1' => 'Fix inkjet printer paper feed problems - feeder roller cleaning',
            ],
            [
                'category' => 'Roller Paper',
                'video1' => 'Fix Roller Epson L210, memperbaik roll epson L210 tidak bisa narik kertas, cara bongkar epson L210.mp4',
            ],

            //Scanner
            [
                'category' => 'Scanner',
                'video1' => 'Cara Memperbaiki Error Tombol Scanner Pada Tampilan Driver Printer.mp4',
            ],
            [
                'category' => 'Scanner',
                'video1' => 'Cara mengatasi printer canon mp287 eror tidak bergerak scanner rusak p22 CARA SERVICE EROR P22.mp4',
            ],
            [
                'category' => 'Scanner',
                'video1' => 'cara mengatasi scanner tidak terdeteksi error.mp4',
            ],
            [
                'category' => 'Scanner',
                'video1' => 'Epson L380 Service Scan Glass Clean &  Solution All Epson Printer.mp4',
            ],
            [
                'category' => 'Scanner',
                'video1' => 'Mengatasi scaner unit printer epson L3110 rusak _ Penyebab scaner unit error _ ABDI RZK.mp4',
            ],

            //Sensor Kertas
            [
                'category' => 'Sensor Kertas',
                'video1' => 'Belajar lebih dekat cara mengukur _ cek PE SENSOR & ASF SENSOR printer canon dengan mudah _ ABDI RZK.mp4',
            ],
            [
                'category' => 'Sensor Kertas',
                'video1' => 'CARA GANTI SENSOR CANON PIXMA SERI G, cara ganti encoder timing disk printer canon pixma g2000.mp4',
            ],
            [
                'category' => 'Sensor Kertas',
                'video1' => 'CARA JITU!!! Mengatasi sensor encoder disk Printer epson L3110 yang mudah terlepas _ ABDI RZK.mp4',
            ],
            [
                'category' => 'Sensor Kertas',
                'video1' => 'Perbaiki Sensor Kertas _ Sensor PE Printer Canon IP2770 Paper Has Run Out Tanpa Mengganti Sensornya.mp4',
            ],
            [
                'category' => 'Sensor Kertas',
                'video1' => 'Tutorial cara membongkar dan memperbaiki sensor kertas printer MP237.mp4',
            ],



        ];
        foreach ($edu as $data) {
            Education::create($data);
        }
    }
}
