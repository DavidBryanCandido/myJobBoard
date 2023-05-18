<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            [
                'title' => 'Manager',
                'description' => 'Krusty Crab Manager',
                'location' => 'Kruty crab, Bikini Bottom',
                'type' => 'Full-Time',
                'salary' => 3.99,
                'status' => 1,
                'company_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Spying',
                'description' => 'Spy on Krusty Crab Fry Cook',
                'location' => 'Chum bucket, Bikini Bottom',
                'type' => 'Full-Time',
                'salary' => 99.99,
                'status' => 0,
                'company_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fry Cook',
                'description' => 'Fry crabby patty',
                'location' => 'Kruty crab, Bikini Bottom',
                'type' => 'Full-Time',
                'salary' => 1.99,
                'status' => 1,
                'company_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cashier',
                'description' => 'Do cashier stuff',
                'location' => 'Kruty crab, Bikini Bottom',
                'type' => 'Full-Time',
                'salary' => 2.99,
                'status' => 0,
                'company_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
