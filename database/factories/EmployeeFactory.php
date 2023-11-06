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
            'bornCountry'=>$this->faker->text(8),
            'email' => $this->faker->unique()->safeEmail(),
            'employeeId' => rand(101544875,101544895),
            'photo' => 'https://avatars2.githubusercontent.com/u/'.rand(1,200),
            'user_create_id'=> rand(1,5)
        ];
    }
}
