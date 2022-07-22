<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_name'=>$this->faker->name,
            'student_email'=>$this->faker->unique()->safeEmail(),
            'student_address'=>$this->faker->address,
        ];
    }
}
