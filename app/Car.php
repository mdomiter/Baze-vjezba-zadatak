<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['name', 'registration', 'manufacturer'];

    public function client()
    {
        return $this->belongsTo(\App\Client::class);
    }
    
    public function engines()
    {
        return $this->hasMany(\App\Engine::class);
    }
}
