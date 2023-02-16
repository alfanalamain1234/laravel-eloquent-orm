<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Players;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('managers')->truncate();

        $managers = [
           [
            'name' => 'Ole Gunnar Solskjaer',
            'photo' => 'https://www.thesportsdb.com/images/media/person/thumb/8x8vxx1584375477.jpg',
            'clubs_id' => 1,
            'old' => 48,
            'nationality' => 'Norway',
            'created_at' => now(),
            'updated_at' => now(),
           ],

           [
            'name' => 'Pep Guardiola',
            'photo' => 'https://www.thesportsdb.com/images/media/person/thumb/8x8vxx1584375477.jpg',
            'clubs_id' => 2,
            'old' => 40,
            'nationality' => 'Spain',
            'created_at' => now(),
            'updated_at' => now(),
           ],

           [
            'name' => 'Jurgen Klopp',
            'photo' => 'https://www.thesportsdb.com/images/media/person/thumb/8x8vxx1584375477.jpg',
            'clubs_id' => 3,
            'old' => 50,
            'nationality' => 'Germany',
            'created_at' => now(),
            'updated_at' => now(),
           ],

           [
            'name' => 'Frank Lampard',
            'photo' => 'https://www.thesportsdb.com/images/media/person/thumb/8x8vxx1584375477.jpg',
            'clubs_id' => 4,
            'old' => 45,
            'nationality' => 'England',
            'created_at' => now(),
            'updated_at' => now(),
           ],

           [
            'name' => 'Mauricio Pochettino',
            'photo' => 'https://www.thesportsdb.com/images/media/person/thumb/8x8vxx1584375477.jpg',
            'clubs_id' => 5,
            'old' => 50,
            'nationality' => 'Argentina',
            'created_at' => now(),
            'updated_at' => now(),
           ],

        ];
        // Managers::insert($managers);
        DB::table('managers')->insert($managers);
    }
}
