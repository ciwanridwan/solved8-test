<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeSheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filled = [
            [
                'klien' => 'PT ABC',
                'kode_pek' => "ABC-AUD-3122xx",
                'jenis_penugasan' => 'audit',
                'tahun' => '31 Desember 20xx',
                'kode_akun' => 'AF',
                'akun' => 'Kas dan Bank persediaan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'klien' => 'PT ABC',
                'kode_pek' => "ABC-AUD-3122xx",
                'jenis_penugasan' => 'audit',
                'tahun' => '31 Desember 20xx',
                'kode_akun' => 'KPL II',
                'akun' => 'Aset Tetap Harga Pokok Persediaan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'klien' => 'PT DEF',
                'kode_pek' => "DEF-TPDOC-3122xx",
                'jenis_penugasan' => 'TP Doc',
                'tahun' => '31 Desember 20xx',
                'kode_akun' => 'MF',
                'akun' => 'Master File',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'klien' => 'PT DEF',
                'kode_pek' => "DEF-TPDOC-3122xx",
                'jenis_penugasan' => 'TP Doc',
                'tahun' => '31 Desember 20xx',
                'kode_akun' => 'MF',
                'akun' => 'Master File',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]

        ];

        foreach ($filled as $value) {
            DB::table('time_sheets')->insert([$value]);
        }
    }
}
