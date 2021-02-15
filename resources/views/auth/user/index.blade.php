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
                        <h3 class="page-title">Welcome To All Student Panel !</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->


            <div class="row">
                <div class="col-lg-12">
                    <a id="add_user_btn" href="" class="btn btn-primary mb-3">Add New Student</a>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Student Table</h4>
                            <div class="del_msg"></div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>User Name</th>
                                            <th>Subject</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <style>
                                        #img{
                                            width: 50px;
                                            height: 50px;
                                            border-radius: 100%;
                                        }
                                    </style>
                                    <tbody id="Student_data">



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






        {{-- Registration System Model Start --}}

        
		<!-- Main Wrapper -->
        <div id="add_user_modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
        
                        
                    <div class="modal-body">
        
                                <!-- Main Wrapper -->
                        <div class="main-wrapper login-body">
                            <div class="login-wrapper">
                                <div class="container">
                                    <div class="loginbox">
                                        {{-- <div class="login-left">
                                            <img class="img-fluid" src="{{ URL::to('') }}/backend/assets/img/logo-white.png" alt="Logo">
                                        </div> --}}
                                        <div class="login-right">
                                            <div class="login-right-wrap">
                                                <h1>Register</h1>
                                                <p class="account-subtitle">Access to our dashboard</p>
                                                
                                                <p class="msg"></p>


                                                    <!-- Form -->

                                                <form id="add_user_form" action="" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input name="name" class="form-control" type="text" placeholder="Name">
                                                        
                                                        {{-- @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror --}}
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="email" class="form-control" type="text" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="cell" class="form-control" type="text" placeholder="cell">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="uname" class="form-control" type="text" placeholder="uname">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="subject" class="form-control" type="text" placeholder="subject">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="photo" class="form-control-file" type="file">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <button class="btn btn-primary btn-block" type="submit">Register</button>
                                                    </div>
                                                </form>

                                                <!-- /Form -->
                                                
                                                <div class="login-or">
                                                    <span class="or-line"></span>
                                                    <span class="span-or">or</span>
                                                </div>
                                                
                                                <!-- Social Login -->
                                                <div class="social-login">
                                                    <span>Register with</span>
                                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
                                                </div>
                                                <!-- /Social Login -->
                                                
                                                <div class="text-center dont-have">Already have an account? <a href="">Login</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            <!-- /Main Wrapper -->
                    </div>
                </div>
            </div>
        </div>
                <!-- /Main Wrapper -->

                
                {{-- Registration System Model End --}}




 {{-- Student Profile Model Start --}}


       
		<!-- Main Wrapper -->
        <div id="student_profile_modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <button class="close" data-dismiss='modal'>&times;</button>
                    <div class="modal-header">
                        <h3 id="stu_header" style="display: block; margin:auto; border:1px solid gray;" class="p-2"></h3>
                    </div>
        
                        
                    <div class="modal-body">
                                
                        <div class="card-body">
        
                            <img style="width: 130px; height:130px; border-radius:100%; margin:auto; display:block;" src="" alt=""><br>
        
                            <table id="student_profile_table" class="table table-striped text-center">
                                <tr>
                                    <td>Name</td>
                                    <td id="name"></td>
                                </tr>
        
                                <tr>
                                    <td>Emali</td>
                                    <td id="email"></td>
                                </tr>
        
                                <tr>
                                    <td>Cell</td>
                                    <td id="cell"></td>
                                </tr>
        
                                <tr>
                                    <td>User Name</td>
                                    <td id="uname"></td>
                                </tr>
        
                                <tr>
                                    <td>Subject</td>
                                    <td id="subject"></td>
                                </tr>
        
                                
                            </table>
                                
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
                <!-- /Main Wrapper -->   
                
{{-- Student Profile Model End --}}



{{-- Edit & Update Model Start --}}

        
		<!-- Main Wrapper -->
        <div id="edit_student_modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
        
                        
                    <div class="modal-body">
        
                                <!-- Main Wrapper -->
                        <div class="main-wrapper login-body">
                            <div class="login-wrapper">
                                <div class="container">
                                    <div class="loginbox">
                                        {{-- <div class="login-left">
                                            <img class="img-fluid" src="{{ URL::to('') }}/backend/assets/img/logo-white.png" alt="Logo">
                                        </div> --}}
                                        <div class="login-right">
                                            <div class="login-right-wrap">
                                                <h1>Student Update</h1>
                                                <p class="account-subtitle">Update your all data from here</p>
                                                
                                                <p class="edit_msg"></p>


                                                    <!-- Form -->

                                                <form id="edit_student_form" action="" method="POST" enctype="multipart/form-data">

                                                    @csrf
                                                    @method('PATCH')

                                                    <div class="form-group">
                                                        <input name="name" class="form-control" type="text" placeholder="Name">

                                                        <input name="id" class="form-control" type="hidden">
                                                        
                                                        {{-- @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror --}}
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="email" class="form-control" type="text" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="cell" class="form-control" type="text" placeholder="cell">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="uname" class="form-control" type="text" placeholder="uname">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="subject" class="form-control" type="text" placeholder="subject">
                                                    </div>
                                                    <div class="form-group">

                                                        <img style="width: 130px; height:130px; border-radius:100%;" src="" alt="">

                                                        <input name="old_photo" class="form-control-file" type="hidden">

                                                        <input name="new_photo" class="form-control-file mt-3" type="file">

                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <button class="btn btn-primary btn-block" type="submit">Update</button>
                                                    </div>
                                                </form>

                                                <!-- /Form -->
                                                
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            <!-- /Main Wrapper -->
                    </div>
                </div>
            </div>
        </div>
                <!-- /Main Wrapper -->

                
{{-- Edit Model End --}}
                

@endsection