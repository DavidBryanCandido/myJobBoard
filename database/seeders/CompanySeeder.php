<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('Companies')->insert([
            [
                'name' => 'Krusty Crab',
                'website' => 'KrustyCrab.com',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 1,
            ],
            [
                'name' => 'Chum bucket',
                'website' => 'ChumBucket.com',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 2,
            ],
        ]);
    }
}
