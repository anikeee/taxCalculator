<?php

namespace Database\Factories;


use App\Models\Mark;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarkFactory extends Factory
{
    protected $model = Mark::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'mark'=> $this->faker->randomElement([10,22,36,45,55,68,74,82,93]),
            'student_id'=> $this->faker->randomElement([1,2,3,4,5,6,7,8,9]),
            'course_id'=> $this->faker->randomElement([1,2,3,4,5,6,7,8,9]),
        ];
    }
}
