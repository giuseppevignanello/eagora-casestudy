<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;


    //add connections
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function employe()
    {
        return $this->belongsTo(Employee::class);
    }
}
