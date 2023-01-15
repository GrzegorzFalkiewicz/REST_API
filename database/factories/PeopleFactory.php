<?php

namespace Database\Factories;

use App\Modeles\People;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       return [
            'name'=>$this->faker->firstName(),
            'last_name'=>$this->faker->lastName(),
            'phone_number'=>$this->faker->phoneNumber(),
            'street'=>$this->faker->streetName(),
            'building_number'=>$this->faker->buildingNumber(),
            'city'=>$this->faker->city(),
            'postcode'=>$this->faker->postcode(),
            'country'=>$this->faker->country(),
        ];
    }
}
