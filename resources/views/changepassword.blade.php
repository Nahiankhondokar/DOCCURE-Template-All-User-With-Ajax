@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Password Change') }}</div>

                @if( Session::has('success') )
                <p class="alert alert-success">{{ Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button></p>
                @endif

                @if( Session::has('wrong') )
                <p class="alert alert-danger">{{ Session::get('wrong') }} <button class="close" data-dismiss="alert">&times;</button></p>
                @endif
                

                <div class="card-body">
                    <form method="POST" action="{{ route('updatePassword') }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

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


    {{-- Change Password Modal --}}

{{-- <div id="change_password_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">

                <!-- Main Wrapper -->

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Password Change') }}</div>
                
                                @if( Session::has('success') )
                                <p class="alert alert-success">{{ Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button></p>
                                @endif
                
                                @if( Session::has('wrong') )
                                <p class="alert alert-danger">{{ Session::get('wrong') }} <button class="close" data-dismiss="alert">&times;</button></p>
                                @endif
                                
                
                                <div class="card-body">
                                    <form method="POST" action="{{ route('updatePassword') }}">
                                        @csrf
                                        @method('PATCH')
                
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>
                
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
        

@endsection
