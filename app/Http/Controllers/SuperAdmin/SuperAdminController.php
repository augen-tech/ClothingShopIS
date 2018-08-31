<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuperAdminController extends Controller
{
    public function ShowListAdmin()
    {
        return view('superAdmin/listAdmin');
    }

    public function FormCreateAdmin()
    {
        return view('superAdmin/formCreateAdmin');
    }
}
