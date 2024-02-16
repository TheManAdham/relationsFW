<?php

// app/Models/Invoice.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'status',
    ];

    // Define the relationship with the Reservation model
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

