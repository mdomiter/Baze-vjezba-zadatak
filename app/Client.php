<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['first_name', 'last_name', 'address', 'vat_id'];

    public function cars()
    {
        return $this->hasMany(\App\Car::class);
    }
}
