<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use Faker\Factory as FakerFactory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition(): array
    {
        $faker = FakerFactory::create();

        return [
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Example password
            'birthday' => $faker->date(),
            'mobile' => $faker->phoneNumber,
            'street' => $faker->streetName,
            'house_number' => $faker->buildingNumber,
            'zip_code' => $faker->postcode,
            'city' => $faker->city,
            'role_id' => 2, 
        ];
    }
}
