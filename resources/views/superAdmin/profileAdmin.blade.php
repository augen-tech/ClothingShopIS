@extends('layouts.app')

@section('pageWrapper')

                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Profile Admin</h3>
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="../assets/images/users/5.jpg" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10">{{$admin->username}}</h4>
                                    <!-- <h6 class="card-subtitle">Accoubts Manager Amix corp</h6> -->
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <!-- <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>hannagover@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>+91 654 784 547</h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                                <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br/>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                            </div> -->
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Log Activity</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <!-- new table -->
                                    <div class="card-body">
                                        <h4 class="card-title">Data Table</h4>
                                        <h6 class="card-subtitle">Data table example</h6>
                                        <div class="table-responsive m-t-40">
                                            <div id="myTable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="myTable_length"><label>Show <select name="myTable_length" aria-controls="myTable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="myTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="myTable"></label></div><table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                                                <thead>
                                                    <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 174px;">Activity</th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 276px;">Table Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 131px;">Field Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        @foreach($data as $row)                                                    
                                                            <tr>
                                                                <td class="sorting_1">{{$row->crud_activity->action}}</td>        
                                                                @if (Schema::hasColumn('$row', 'province_id'))
                                                                    <td class="sorting_1">{{$row->province->name}}</td>        
                                                                @elseif (Schema::hasColumn('$row', 'city_id'))
                                                                    <td class="sorting_1">{{$row->city->name}}</td>
                                                                @elseif (Schema::hasColumn('$row', 'deliver_id'))
                                                                    <td class="sorting_1">{{$row->deliver->name}}</td>
                                                                @elseif (Schema::hasColumn('$row', 'supplier_id'))
                                                                    <td class="sorting_1">{{$row->supplier->name}}</td>
                                                                @elseif (Schema::hasColumn('$row', 'item_id'))
                                                                    <td class="sorting_1">{{$row->item->name}}</td>
                                                                @elseif (Schema::hasColumn('$row', 'order_id'))
                                                                    <td class="sorting_1">{{$row->order->id}}</td>                                                            
                                                                @endif
                                                            </tr>
                                                        @endforeach
                                                    </tr></tbody>
                                            </table><div class="dataTables_info" id="myTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="myTable_paginate"><a class="paginate_button previous disabled" aria-controls="myTable" data-dt-idx="0" tabindex="0" id="myTable_previous">Previous</a><span><a class="paginate_button current" aria-controls="myTable" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="myTable" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="myTable" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="myTable" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="myTable" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="myTable" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="myTable" data-dt-idx="7" tabindex="0" id="myTable_next">Next</a></div></div>
                                        </div>
                                    </div>
                                    <!-- end new table -->
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Username</strong>
                                                <br>
                                                <p class="text-muted">{{$admin->username}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">johnathan@admin.com</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted">London</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-material m-t-40" action="{{ route('superadmin.admin.update', $admin->id) }}" method="POST" > 
                                        @csrf
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input name="username" type="text" class="form-control form-control-line" value="{{$admin->username}}"> </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input name="password" type="password" class="form-control" value="{{$admin->password}}"> </div>
                                            <!-- <div class="form-group">
                                                <label>Photo</label>
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                    <input type="file" > </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                            </div> -->
                                            <div class="form-actions pull-right">
                                                <div class="col-sm-12">
                                                    <button type="button" class="btn btn-inverse">Cancel</button>
                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div><hr></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

@endsection