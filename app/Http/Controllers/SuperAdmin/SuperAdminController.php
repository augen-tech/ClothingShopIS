<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admins;
use App\Shop_brands;
use App\Item_crud_logs;
use App\Province_crud_logs;
use App\City_crud_logs;
use App\Order_crud_logs;
use App\Supplier_crud_logs;
use App\Deliver_crud_logs;

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

    public function ListShopBrand()
    {
        $shopBrands = Shop_brands::All();
        return view('superAdmin/listShopBrand', compact('shopBrands'));
    }
   

    public function ProfileAdmin($id)
    {
        $admin = Admins::find($id)->first();
        $item_crud_logs_ =Item_crud_logs::where ('admin_id', '=' , $admin->id) ->get();
        $province_crud_logs_ = Province_crud_logs::where ('admin_id', '=' , $admin->id) ->get();
        $city_crud_logs_ = City_crud_logs::where ('admin_id', '=' , $admin->id) ->get();
        $deliver_crud_logs_ = Deliver_crud_logs::where ('admin_id', '=' , $admin->id) ->get();
        $supplier_crud_logs_ = Supplier_crud_logs::where ('admin_id', '=' , $admin->id) ->get();
        $order_crud_logs_ = Order_crud_logs::where ('admin_id', '=' , $admin->id) ->get();
        $data = [
            'item_crud_logs_' => $item_crud_logs_,
            'province_crud_logs_' => $supplier_crud_logs_,
        ];
        // return dd($data);
        return view('superAdmin/profileAdmin', compact('admin','data'));
    }

    public function FormCreateAdmin()
    {
        // return dd("asd");
        return view('superAdmin/formAdmin');
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
        return redirect()->route('superadmin.showListAdmin');
        

    }

    public function UpdateAdmin($id, Request $request)
    {
        //
        // return dd($request->all());
        Admins::find($id)->update([
            'username' => $request->username,
            'password' => $request->password,
            // 'image_source_address' => "address"
        ]);

        return redirect()->route('superadmin.showListAdmin');
        

    }

    public function destroyAdmin($id)
    {
        //
        
        $admin = Admins::find($id)->delete();
        
        return redirect()->route('superadmin.showListAdmin');

    }
    
    public function destroyShopBrand($id)
    {
        //
        
        $shopBrands = Shop_brands::find($id)->delete();
        
        return redirect()->route('superadmin.listShopBrand');

    }
}
