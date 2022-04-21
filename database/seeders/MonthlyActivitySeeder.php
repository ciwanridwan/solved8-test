<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthlyActivitySeeder extends Seeder
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
                'nama_perusahaan' => 'PT ABC',
                'uraian_pekerjaan' => 'Audit 31 Des 20xx',
                'kode_pek' => 'ABC-AUD-123xx',
                'jumlah' => '16',
                'paraf_svp' => '-',
                'keterangan' => '-'
            ],

            [
                'nama_perusahaan' => 'PT DEF',
                'uraian_pekerjaan' => 'TP Doc Th 20xx',
                'kode_pek' => 'DEF-TPDOC-3112xx',
                'jumlah' => '12',
                'paraf_svp' => '-',
                'keterangan' => '-'
            ]
        ];

        DB::table('monthly_activities')->insert($filled);
    }
}
