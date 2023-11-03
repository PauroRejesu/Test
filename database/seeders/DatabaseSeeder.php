<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User, Employee, JobTitle};
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Employee::factory(200)->create();
        JobTitle::factory(100)->create();
    }
}
