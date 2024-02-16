<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Instructor;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instructor>
 */
class InstructorFactory extends Factory
{

    protected $model = Instructor::class;

    public function definition(): array
    {
        $faker = FakerFactory::create();

        return [
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Default password
            'bsn_number' => $faker->numerify('#########'),
            'birthday' => $faker->date,
            'mobile' => $faker->phoneNumber,
            'street' => $faker->streetName,
            'house_number' => $faker->buildingNumber,
            'zip_code' => $faker->postcode,
            'city' => $faker->city,
            'role_id' => 3, // Assuming 'Instructor' role has ID 3
        ];
    }
}
