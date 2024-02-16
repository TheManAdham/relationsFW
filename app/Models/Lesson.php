<?php

// app/Models/Lesson.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'duration',
        'price',
        'meetup_count', // Added the meetup_count field
    ];

    // Define the relationship with the reservations table
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
