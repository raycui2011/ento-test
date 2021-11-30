<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmployeeRoles;

class EmployeeRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      EmployeeRoles::create([
              'role_id' => 1,
              'employee_id' => 1
          ]);
      

      EmployeeRoles::create([
            'role_id' => 2,
            'employee_id' => 2
          ]);

    }
}
