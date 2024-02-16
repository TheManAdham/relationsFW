<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lesson;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instructor>
 */
class LessonFactory extends Factory
{

    protected $model = Lesson::class;

    public function definition(): array
    {
        $faker = FakerFactory::create();

        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->sentence,
            'duration_time' => $this->faker->randomElement([2.5, 3.5]),
            'duration_days' => $this->faker->randomElement([1, 3, 5]),
            'price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
