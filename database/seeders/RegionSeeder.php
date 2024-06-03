<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions =[
            ['name' =>'Brest'],
            ['name' => 'Vitebsk'],
            ['name' => 'Gomel'],
            ['name' => 'Grodno'],
            ['name' => 'Minsk'],
            ['name' => 'Mogilev']
        ];

        DB::table('regions')->insert($regions);
    }
}
