<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuperAdminController extends Controller
{
    public function Dashboard()
    {
        return view('superAdmin/dashboard');
    }
    public function ShowListAdmin()
    {
        return view('superAdmin/listAdmin');
    }

    public function FormCreateAdmin()
    {
        return view('superAdmin/formCreateAdmin');
    }

    public function ProfileAdmin()
    {
        return view('superAdmin/profileAdmin');
    }
}
