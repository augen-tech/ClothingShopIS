@extends('layouts.app')

@section('pageWrapper')

                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">New Admin</h3>
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
                                <h4 class="card-title">Add New Admin</h4>
                                <form class="form-material m-t-40" action="{{ route('superadmin.admin.update') }}" method="POST" > 
                                @csrf
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input name="username" type="text" class="form-control form-control-line"> </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input name="password" type="password" class="form-control"> </div>
                                    <!-- <div class="form-group">
                                        <label>Photo</label>
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                            <input type="file" > </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                    </div> -->
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