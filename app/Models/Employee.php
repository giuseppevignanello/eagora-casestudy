<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    //add the connection with the procedures
    public function procedures()
    {
        return $this->hasMany(Procedure::class);
    }
}
