<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\Clubs;
use App\Models\Stadiums;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate db berfungsi untuk menghapus semua data pada tabel clubs dengan increment id nya dari awal
        // DB::table('clubs')->truncate();
        // membuat data baru pada tabel clubs
        $clubs = [
            [
                'stadiums_id' => 1,  
                'name' => 'Manchester United',
                'logo' => 'https://upload.wikimedia.org/wikipedia/id/7/7a/Manchester_United_FC_crest.svg',
                'url' => 'https://www.manutd.com',
                'trophy' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'stadiums_id' => 2,
                'name' => 'Manchester City',
                'logo' => 'https://upload.wikimedia.org/wikipedia/id/e/eb/Manchester_City_FC_badge.svg',
                'url' => 'https://www.mancity.com',
                'trophy' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'stadiums_id' => 3,
                'name' => 'Liverpool',
                'logo' => 'https://upload.wikimedia.org/wikipedia/id/0/0c/Liverpool_FC.svg',
                'url' => 'https://www.liverpoolfc.com',
                'trophy' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'stadiums_id' => 4,
                'name' => 'Tottenham Hotspur',
                'logo' => 'https://upload.wikimedia.org/wikipedia/id/b/b4/Tottenham_Hotspur.svg',
                'url' => 'https://www.tottenhamhotspur.com',
                'trophy' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'stadiums_id' => 5,
                'name' => 'Arsenal',
                'logo' => 'https://upload.wikimedia.org/wikipedia/id/5/53/Arsenal_FC.svg',
                'url' => 'https://www.arsenal.com',
                'trophy' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];
        // insert data ke tabel clubs
        // Clubs::insert($clubs);
        DB::table('clubs')->insert($clubs);
    }
}
