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
        User::factory(5)->create();
        Employee::factory(100)->create();
        JobTitle::factory(20)->create();
    }
}
