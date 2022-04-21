<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
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
                'nama' => 'Ridwan Andalus',
                'level' => 'Junior',
                'id_number' => 'LSP-123344',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nama' => 'Abar Solihat',
                'level' => 'Middle',
                'id_number' => 'LSP-123345',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('staff')->insert($filled);
    }
}
