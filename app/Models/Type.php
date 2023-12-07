<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    //add connection with procedures
    public function procedures()
    {
        return $this->hasMany(Procedure::class);
    }
}
