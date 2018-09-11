@extends('layouts.app')

@section('pageWrapper')

                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Create Supplier</h3>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Create Supplier</h4>
                                <form class="form-horizontal m-t-40" action="{{ route('admin.admin.createSupplierStore') }}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label>Supplier Name<span class="help"></span></label>
                                        <input name="name" type="text" class="form-control" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" rows="5" value=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number<span class="help"></span></label>
                                        <input name="phoneNumber" type="text" class="form-control" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea name="address" class="form-control" rows="5" value=""></textarea>
                                    </div>
                                    <div class="form-group">
                                    <select name="city_id" class="custom-select col-12" id="inlineFormCustomSelect">
                                            <option selected="">Choose...</option>
                                            @foreach($cities as $row)
                                            <option name="city" type="text" value={{$row->id}}>{{$row->name}}</option>
                                            @endforeach
                                    </select>
                                    </div>
                                    <div class="form-actions pull-right">
                                            <button type="button" class="btn btn-inverse">Cancel</button>
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

@endsection