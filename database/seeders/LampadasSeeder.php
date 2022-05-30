<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LampadasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lampadas')->insert([
            'local' => 'Sala',
            'status' => 'OFF',
            'pin' => 3
        ]);
        DB::table('lampadas')->insert([
            'local' => 'Quarto',
            'status' => 'OFF',
            'pin' => 4
        ]);
        DB::table('lampadas')->insert([
            'local' => 'Cozinha',
            'status' => 'OFF',
            'pin' => 5
        ]);
        DB::table('lampadas')->insert([
            'local' => 'Banheiro',
            'status' => 'OFF',
            'pin' => 6
        ]);
    }
}
