<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Provinces;

class AdminController extends Controller
{
    //
    public function CreateCity()
    {
        $provinces = Provinces::All();
        return view('admin/CreateCity', compact('provinces'));
    }

    
}
