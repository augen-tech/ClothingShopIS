<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admins;

class SuperAdminController extends Controller
{
    public function Dashboard()
    {
        return view('superAdmin/dashboard');
    }
    public function ShowListAdmin()
    {
        $admins = Admins::All();
        return view('superAdmin/listAdmin', compact('admins'));
    }
   

    public function ProfileAdmin()
    {
        return view('superAdmin/profileAdmin');
    }

    public function FormCreateAdmin()
    {
        return view('superAdmin/formCreateAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return dd($request->all());
        $data = [
            'username' => $request->username,
            'password' => $request->password,
            'image_source_address' => "address"
        ];

        Admins::create($data);
        // return redirect()->route('superadmin.showListAdmin');
        

    }
}
