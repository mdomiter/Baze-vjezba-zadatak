<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
    protected $fillable = ['type'];

    public function car()
    {
        return $this->belongsTo(\App\Car::class);
    }

}
