<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    protected $model = Reservation::class;

    public function definition(): array
    {
        return [
            'customer_id' => 1,
            'instructor_id' => 1,
            'lesson_id' => 1,
            'location_id' => 1,
            'time' => '9:00 AM',
            'status' => 'pending',
            'invoice_id' => 1,
        ];
    }
}
