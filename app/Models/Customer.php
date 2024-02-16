<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'birthday',
        'mobile',
        'role_id', // Assuming you have a column to store role_id in the customers table
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}