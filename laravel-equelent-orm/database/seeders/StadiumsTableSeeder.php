<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Stadiums;

class StadiumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('stadiums')->truncate();
        $stadiums = [
            [
                'name' => 'Old Trafford',
                'address' => 'Manchester',
                'capacity' => '76212',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Etihad Stadium',
                'address' => 'Manchester City',
                'capacity' => '55097',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Anfield',
                'address' => 'Liverpool',
                'capacity' => '54074',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Stamford Bridge',
                'address' => 'London',
                'capacity' => '42055',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Tottenham Hotspur Stadium',
                'address' => 'London',
                'capacity' => '62062',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        DB::table('stadiums')->insert($stadiums);
    }
}
