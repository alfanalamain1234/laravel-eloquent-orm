<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Players;

class MacthesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('macthes')->truncate();

        $macthes = [
            [
                'clubs_id' => 1,
                'rivals_id' => 2,
                'schedule' => '2021-01-01 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'clubs_id' => 2,
                'rivals_id' => 3,
                'schedule' => '2021-02-01 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'clubs_id' => 1,
                'rivals_id' => 3,
                'schedule' => '2021-03-01 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'clubs_id' => 2,
                'rivals_id' => 4,
                'schedule' => '2021-04-01 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'clubs_id' => 3,
                'rivals_id' => 4,
                'schedule' => '2021-05-01 00:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        DB::table('macthes')->insert($macthes);
    }
}
