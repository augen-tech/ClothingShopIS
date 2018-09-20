@extends('layouts.app')

@section('pageWrapper')

                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Admin List</h3>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="">
                                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>                                                
                                                <th>city_id</th>
                                                <th>address</th>  
                                                <th>Action</th>  
                                            </tr>
                                        </thead>
                                        <div class="m-t-10">
                                            <div class="d-flex">
                                                <div class="ml-auto">
                                                    <div class="form-group">
                                                        <input id="demo-input-search2" type="text" placeholder="Search" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <tbody>
                                            <!-- loop data -->
                                            @foreach($shopBrands as $row)
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->name}}</td>
                                                <td>{{$row->city['name']}}</td>
                                                <td>{{$row->address}}</td>                                                
                                                <td>
                                                    <a href="{{ route('superadmin.destroyShopBrand', $row->id) }}"><span><i class="mdi mdi-delete" alt="alert" id="sa-params"></i></span></a>
                                                </td>
                                            </tr>

                                            @endforeach
                                            <!-- end loop data -->
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                </td>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

@endsection