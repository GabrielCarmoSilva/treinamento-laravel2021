<?php

use App\Course;
use App\Person;
use Illuminate\Database\Seeder;

class PersonCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = Course::all();
        $people = Person::all();

        foreach($people as $person) {
            $person->courses()->attach(
                $courses->random(rand(1,3))->pluck('id')->toArray()
            );
        }
    }
}
