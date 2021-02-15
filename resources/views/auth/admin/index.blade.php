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
                        <h3 class="page-title">Welcome To All Admin Panel !</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Admin Account</h4>
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
                                            <th>Cell</th>
                                        </tr>
                                    </thead>
                                    <style>
                                        #img{
                                            width: 50px;
                                            height: 50px;
                                            border-radius: 100%;
                                        }
                                    </style>
                                    <tbody>
                                        
                                        @foreach( $all_admin as $admin )

                                        <tr>
                                            <td>{{ $loop -> index + 1 }}</td>
                                            <td>{{ $admin -> name }}</td>
                                            <td>{{ $admin -> email }}</td>
                                            <td>{{ $admin -> cell }}</td>
                                        </tr>

                                        @endforeach
                                        
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











 {{-- Password Change Model Start --}}


 {{-- <div id="change_password_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">

                <!-- Main Wrapper -->

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">{{ __('Password Change') }}</div>
                
                                @if( Session::has('success') )
                                <p class="alert alert-success">{{ Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button></p>
                                @endif
                
                                @if( Session::has('wrong') )
                                <p class="alert alert-danger">{{ Session::get('wrong') }} <button class="close" data-dismiss="alert">&times;</button></p>
                                @endif
                                
                
                                <div class="card-body">
                                    <form method="POST" action="">
                                        @csrf
                                        @method('PATCH')
                
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>
                
                                            <div class="col-md-6">
                                            <input id="password" type="text" class="form-control" name="old_password" required autocomplete="old_password">

                
                                                @error('old_password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>
                
                                            <div class="col-md-6">
                                            <input id="password" type="text" class="form-control" name="new_password" required autocomplete="new_password">
                
                                                @error('new_password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                
                                            <div class="col-md-6">
                                            <input id="password-confirm" type="text" class="form-control" name="password_confirmation" required autocomplete="new-password">
                
                                                @error('old-password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        
                
                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Update') }}
                                                </button>
                                                <a href="{{ route('home') }}" class="btn btn-warning">
                                                    {{ __('Back') }}
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /Main Wrapper -->
                       
            </div>

        </div>
    </div>
</div> --}}

                
{{-- Password Change Model End --}}




                

@endsection