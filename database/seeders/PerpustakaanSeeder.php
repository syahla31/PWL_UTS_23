<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerpustakaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode_buku' => 'BKN01',
                'judul' => 'Belajar Database',
                'pengarang' => 'Syahla Syafiqah',
                'jenis_buku' => 'Buku Umum',
                'harga' => '102000',
                'qty' => 50
            ],
            [
                'kode_buku' => 'BKN02',
                'judul' => 'Belajar Membaca',
                'pengarang' => 'Yunus Abadi',
                'jenis_buku' => 'Buku Umum',
                'harga' => '110000',
                'qty' => 60
            ],
            [
                'kode_buku' => 'BKN03',
                'judul' => 'Dari Langit ke Bumi',
                'pengarang' => 'Ferdina Malika',
                'jenis_buku' => 'Novel',
                'harga' => '75000',
                'qty' => 40
            ],
            [
                'kode_buku' => 'BKN04',
                'judul' => 'Dilan 1990',
                'pengarang' => 'Pidi Baiq',
                'jenis_buku' => 'Novel',
                'harga' => '70000',
                'qty' => 20
            ],
            [
                'kode_buku' => 'BKN05',
                'judul' => 'Mariposa',
                'pengarang' => 'Luluk HF',
                'jenis_buku' => 'Novel',
                'harga' => '99000',
                'qty' => 50
            ],
            [
                'kode_buku' => 'BKN06',
                'judul' => 'Kata',
                'pengarang' => 'Rintik Sedu',
                'jenis_buku' => 'Novel',
                'harga' => '90000',
                'qty' => 10
            ],
            [
                'kode_buku' => 'BKN07',
                'judul' => 'Atomic Habits',
                'pengarang' => 'James Clear',
                'jenis_buku' => 'Nonfiksi',
                'harga' => '80000',
                'qty' => 15
            ],
            [
                'kode_buku' => 'BKN08',
                'judul' => 'Filosofi Teras',
                'pengarang' => 'Henry Manampiring',
                'jenis_buku' => 'Nonfiksi',
                'harga' => '100000',
                'qty' => 5
            ],
            [
                'kode_buku' => 'BKN09',
                'judul' => 'Belajar Laravel',
                'pengarang' => 'Natasha Guanna',
                'jenis_buku' => 'Buku Umum',
                'harga' => '89000',
                'qty' => 22
            ],
            [
                'kode_buku' => 'BKN10',
                'judul' => 'Belajar CI',
                'pengarang' => 'Amanda Rawles',
                'jenis_buku' => 'Buku Umum',
                'harga' => '99000',
                'qty' => 40
            ],
            [
                'kode_buku' => 'BKN11',
                'judul' => 'Laskar Pelangi',
                'pengarang' => 'Andrea Hirata',
                'jenis_buku' => 'Novel',
                'harga' => '100000',
                'qty' => 50
            ],
            [
                'kode_buku' => 'BKN12',
                'judul' => 'Geez and And',
                'pengarang' => 'Rintik Sedu',
                'jenis_buku' => 'Novel',
                'harga' => '70000',
                'qty' => 3
            ],
            [
                'kode_buku' => 'BKN13',
                'judul' => 'Tangan Emas',
                'pengarang' => 'J.K Rowling',
                'jenis_buku' => 'Novel',
                'harga' => '30000',
                'qty' => 2
            ],
            [
                'kode_buku' => 'BKN14',
                'judul' => 'Ancika',
                'pengarang' => 'Pidi Baiq',
                'jenis_buku' => 'Novel',
                'harga' => '90000',
                'qty' => 7
            ],
            [
                'kode_buku' => 'BKN15',
                'judul' => 'Glen Anggara',
                'pengarang' => 'Luluk HF',
                'jenis_buku' => 'Novel',
                'harga' => '109000',
                'qty' => 4
            ],
            [
                'kode_buku' => 'BKN16',
                'judul' => 'Laut Bercerita',
                'pengarang' => 'Laila S. Chudori',
                'jenis_buku' => 'Novel',
                'harga' => '91000',
                'qty' => 10
            ],
            [
                'kode_buku' => 'BKN17',
                'judul' => 'Argantara',
                'pengarang' => 'Falistiyana',
                'jenis_buku' => 'Novel',
                'harga' => '30000',
                'qty' => 15
            ],
            [
                'kode_buku' => 'BKN18',
                'judul' => 'Stop Overthinking',
                'pengarang' => 'Nick Trenton',
                'jenis_buku' => 'Nonfiksi',
                'harga' => '59000',
                'qty' => 2
            ],
            [
                'kode_buku' => 'BKN19',
                'judul' => 'Belajar Menulis',
                'pengarang' => 'Sofia Mulia',
                'jenis_buku' => 'Buku Umum',
                'harga' => '43000',
                'qty' => 2
            ],
            [
                'kode_buku' => 'BKN20',
                'judul' => 'Barbie',
                'pengarang' => 'Lala Sofia',
                'jenis_buku' => 'Novel',
                'harga' => '100000',
                'qty' => 2
            ],
        ];
        DB::table('perpustakaans')->insert($data);
    }
}
