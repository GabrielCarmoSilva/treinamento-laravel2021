<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(PersonSeeder::class);
        $this->call(PersonCourseSeeder::class);
        $this->call(UserSeeder::class);
    }
}
