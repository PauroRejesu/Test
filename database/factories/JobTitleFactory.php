<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobTitleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jobDesc' => $this->faker->word,
            'jobTitleDesc' => $this->faker->text(150),
            'isBoss' => rand(0,1),
            'isPresident' => rand(0,1),
            'salary' => rand(100000,999999),

            //------Relations-------------------------//
            'employee_id'=> rand(1,100),
            'user_create_id'=> rand(1,5),
        ];
    }
}
