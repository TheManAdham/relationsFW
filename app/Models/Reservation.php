<?php

// app/Models/Reservation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'lesson_id',
        'location_id',
        'time_range',
        'status',
        'invoice_id', // Assuming each reservation is associated with an invoice
    ];

    // Define the relationship with the Customer model
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Define the relationship with the Lesson model
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    // Define the relationship with the Location model
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    // Define the relationship with the Invoice model
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}

