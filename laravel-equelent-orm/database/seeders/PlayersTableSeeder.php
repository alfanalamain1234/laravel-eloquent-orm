<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Players;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('players')->truncate();

        $players = [
            [
                'name' => 'David De Gea',
                'photo' => 'https://www.thesun.co.uk/wp-content/uploads/2020/07/NINTCHDBPICT000620202247.jpg?strip=all&w=960',
                'clubs_id' => 1,
                'position' => 'Goalkeeper',
                'height' => '193',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Harry Maguire',
                'photo' => 'https://www.thesun.co.uk/wp-content/uploads/2020/07/NINTCHDBPICT000620202247.jpg?strip=all&w=960',
                'clubs_id' => 2,
                'position' => 'Defender',
                'height' => '193',
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => 'Virgil van Dijk',
                'photo' => 'https://www.thesun.co.uk/wp-content/uploads/2020/07/NINTCHDBPICT000620202247.jpg?strip=all&w=960',
                'clubs_id' => 3,
                'position' => 'Defender',
                'height' => '193',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Sadio Mane',
                'photo' => 'https://www.thesun.co.uk/wp-content/uploads/2020/07/NINTCHDBPICT000620202247.jpg?strip=all&w=960',
                'clubs_id' => 4,
                'position' => 'Midfielder',
                'height' => '193',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Mohamed Salah',
                'photo' => 'https://www.thesun.co.uk/wp-content/uploads/2020/07/NINTCHDBPICT000620202247.jpg?strip=all&w=960',
                'clubs_id' => 5,
                'position' => 'Midfielder',
                'height' => '193',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        DB::table('players')->insert($players);
    }
}
