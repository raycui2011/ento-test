<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
                'name' => 'test_area1',
                'description' => 'this is a test ares1',
            ]);

        Area::create([
                'name' => 'test_area2',
                'description' => 'this is a test ares2',
            ]);
        Area::create([
                'name' => 'test_area3',
                'description' => 'this is a test ares3',
            ]);

    }
}
