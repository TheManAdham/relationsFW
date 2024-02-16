<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Invoice;
use Faker\Factory as FakerFactory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{

    protected $model = Invoice::class;

    public function definition(): array
    {
        $faker = FakerFactory::create();

        return [
            'amount' => $faker->randomFloat(2, 10, 1000), // Random amount between 10 and 1000
            'status' => $faker->randomElement(['pending', 'paid', 'cancelled']),
        ];
    }
}
