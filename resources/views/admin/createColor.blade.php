@extends('layouts.app')

@section('pageWrapper')


                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Create Color</h3>
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
                                <h4 class="card-title">Form Create Color</h4>
                                <form class="form-horizontal m-t-40" action="{{ route('admin.admin.createColorStore') }}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label>Input Color<span class="help"></span></label>
                                        <input name="name" type="text" class="form-control" value="">
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