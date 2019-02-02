<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = ['rent_date', 'return_date', 'client_id', 'car_id'];
}
