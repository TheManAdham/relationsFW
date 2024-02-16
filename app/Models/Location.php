<?php

// app/Models/Location.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
    ];

    // Define the relationship with the Reservation model
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
