<?php

namespace Database\Factories;


use App\Models\Course;
use App\Models\mark;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'course_name'=> $this->faker->name(),

        ];
    }
}
