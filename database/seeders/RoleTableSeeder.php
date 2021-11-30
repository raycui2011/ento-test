<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Role::create([
          'name' => 'role one',
          'area_id' => 1,
      ]);

      Role::create([
          'name' => 'role two',
          'area_id' => 2,
      ]);

      Role::create([
          'name' => 'role three',
          'area_id' => 3,
      ]);
    }
}
