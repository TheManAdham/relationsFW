<?php

// app/Models/Role.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Define the relationship with the customers table
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    // Define the relationship with the admins table
    public function admins()
    {
        return $this->hasMany(Admin::class);
    }

    // Define the relationship with the instructors table
    public function instructors()
    {
        return $this->hasMany(Instructor::class);
    }
}

