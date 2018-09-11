<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Provinces;
use App\Cities;
use App\Delivers;
use App\Colors;
use App\Item_types;
use App\Suppliers;

class AdminController extends Controller
{
    //
    public function CreateCity()
    {
        $provinces = Provinces::All();
        return view('admin/createCity', compact('provinces'));
    }

    public function CreateProvince()
    {
        return view('admin/createProvince');
    }

    public function CreateDeliver()
    {
        return view('admin/createDeliver');
    }

    public function CreateColor()
    {
        return view('admin/createColor');
    }

    public function CreateItemType()
    {
        return view('admin/createItemType');
    }

    public function CreateSupplier()
    {
        $cities = Cities::All();
        return view('admin/createSupplier',compact('cities'));
    }

    public function ListProvince()
    {
        $provinces = Provinces::All();
        return view('admin/listProvince', compact('provinces'));
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function CreateCityStore(Request $request)
    {
        //
        // return dd($request->all());
        $data = [
            'province_id' => $request->province_id,
            'name' => $request->city,
        ];

        Cities::create($data);
        // return redirect()->route('superadmin.showListAdmin');
        

    }

    public function CreateProvinceStore(Request $request)
    {
        //
        // return dd($request->all());
        $data = [
            'name' => $request->name,
        ];

        Provinces::create($data);
        // return redirect()->route('superadmin.showListAdmin');
        

    }

    public function CreateDeliverStore(Request $request)
    {
        //
        // return dd($request->all());
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        Delivers::create($data);
        // return redirect()->route('superadmin.showListAdmin');
        

    }

    public function CreateColorStore(Request $request)
    {
        //
        // return dd($request->all());
        $data = [
            'name' => $request->name,
        ];

        Colors::create($data);
        // return redirect()->route('superadmin.showListAdmin');
        

    }

    public function CreateItemTypeStore(Request $request)
    {
        //
        // return dd($request->all());
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        Item_types::create($data);
        // return redirect()->route('superadmin.showListAdmin');
        

    }

    public function CreateSupplierStore(Request $request)
    {
        //
        // return dd($request->all());
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'phone_number' => $request->phoneNumber,
            'address' => $request->address,
            'city_id' => $request->city_id,
        ];

        Suppliers::create($data);
        // return redirect()->route('superadmin.showListAdmin');
        

    }
}
