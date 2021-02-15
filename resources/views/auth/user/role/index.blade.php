@extends('layouts.app')


@section('content')

<!-- Main Wrapper -->
<div class="main-wrapper">
		
    {{-- Header Connection --}}
   @include('layouts.header')
    
    
    {{-- Menu Connection --}}
    @include('layouts.menu')
    
    <!-- Page Wrapper -->
    <div class="page-wrapper">
    
        <div class="content container-fluid">
            
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome To User Role Section !</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->


            <div class="row">
                <div class="col-lg-12">
                    <a id="add_role_btn" href="" class="btn btn-primary mb-3">Add New User Roles</a>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All User Roles</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Cell</th>
                                            <th>User Name</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        {{-- @foreach($users as $user)

                                        <tr>
                                            <td>{{ $loop -> index + 1 }}</td>
                                            <td>{{ $user -> name }}</td>
                                            <td>{{ $user -> email }}</td>
                                            <td>{{ $user -> cell }}</td>
                                            <td>{{ $user -> uname }}</td>
                                            <td><img style="width: 60px; height:60px; border-radius:100%;" src="{{ URL::to('') }}/media/user/{{ $user -> photo }}" alt=""></td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm">View</a>
                                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>			
    </div>
    <!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

@endsection