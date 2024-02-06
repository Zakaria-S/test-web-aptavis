<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'nama' => 'Persib',
                'kota' => 'Bandung'
            ],
            [
                'nama' => 'Persija',
                'kota' => 'Jakarta'
            ],
            [
                'nama' => 'Persikab',
                'kota' => 'Kabupaten Bandung'
            ],
            [
                'nama' => 'Arema',
                'kota' => 'Malang'
            ],
            [
                'nama' => 'Persebaya',
                'kota' => 'Surabaya'
            ],
            [
                'nama' => 'PSIS',
                'kota' => 'Semarang'
            ],
            [
                'nama' => 'PSS',
                'kota' => 'Sleman'
            ],
            [
                'nama' => 'Mataram Utara FC',
                'kota' => 'Yogyakarta'
            ],
        ];

        foreach ($teams as $team) {
            Team::create([
                'nama' => $team['nama'],
                'kota' => $team['kota']
            ]);
        }
    }
}
