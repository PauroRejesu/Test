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
            'isBoss' => rand(0,1),
            'isPresident' => rand(0,1),
            'salary' => rand(100000,999999),

            //------Relations-------------------------//
            'employeeRelation'=> rand(1010000000,1019999999),
            'createUser'=> rand(1,10),
        ];
    }
}
