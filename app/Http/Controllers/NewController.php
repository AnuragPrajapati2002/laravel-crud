<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class NewController extends Controller
{
    function check()
    {
        echo"Already Exist with the help of stub";
    }
    function binding(User $key)
    {
        return $key;
    }
}
