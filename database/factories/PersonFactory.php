<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'    => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'phone'   => $this->faker->phoneNumber,
            'street'  => $this->faker->streetAddress,
            'city'    => $this->faker->city
        ];
    }
}
