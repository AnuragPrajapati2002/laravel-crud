<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\employee;

class user extends Model
{
    use HasFactory;
    public $timestamps=false;
    
    function getSurnameAttribute($value)
    {
        return $value.', Mypcot';
    }
    function getNameAttribute($value)
    {
        return ucfirst($value);
    }
    function relation()
    {
        return $this->hasOne('App\Models\employee');
    }
    
}


