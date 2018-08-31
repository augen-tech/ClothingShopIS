<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    public function listAdmin()
    {
        return view('superAdmin/listAdmin');
    }
}
