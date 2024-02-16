<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Location;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instructor>
 */
class LocationFactory extends Factory
{

    protected $model = Location::class;

    public function definition(): array
    {
        $faker = FakerFactory::create();

        return [
            'city' => $faker->city,
        ];
    }
}
