<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'names' => $this->faker->name(),
            'lastNames' =>$this->faker->name(),
            'addres' =>$this->faker->text(25),
            'phoneNumber' =>rand(1236456789,987654321),
            'bornCity'=>$this->faker->text(12),
            'employeeId' =>rand(1010000000,1019999999),
            'photo' =>$this->faker->imageUrl(120,90),
            'createUser'=> rand(1,10)
        ];
    }
}
