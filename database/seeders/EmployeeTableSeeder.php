<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Employee::create([
              'first_name' => 'ray',
              'last_name' => 'test',
              'pic' => 'https://s3.amazonaws.com/bucketname/foldername/imagename.jpg',
              'email' => 'testray@laravel.com'
          ]);


      Employee::create([
              'first_name' => 'test',
              'last_name' => 'user1',
              'pic' => 'https://s3.amazonaws.com/bucketname/foldername/imagename.jpg',
              'email' => 'testuser1@laravel.com'
          ]);

      Employee::create([
              'first_name' => 'test',
              'last_name' => 'user2',
              'pic' => 'https://s3.amazonaws.com/bucketname/foldername/imagename.jpg',
              'email' => 'testuser2@laravel.com'
          ]);

      Employee::create([
              'first_name' => 'test',
              'last_name' => 'user3',
              'pic' => 'https://s3.amazonaws.com/bucketname/foldername/imagename.jpg',
              'email' => 'testuser3@laravel.com'
          ]);

    }
}
