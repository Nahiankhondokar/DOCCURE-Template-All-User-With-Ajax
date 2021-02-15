<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    /**
     * 
     */
    public function profile(){

        $adminId = Auth::user()->id;

        $data = User::find($adminId);

        return view('adminprofile', [
            'data'      => $data
        ]);
    }



    /**
     * 
     */
    public function users(){

        return view('auth.user.index');
    }


    /**
     * 
     */
    public function role(){
        return view('auth.user.role.index');
    }



    /**
     * 
     */
    public function admin(){

        $all_admin = User::all();
        return view('auth.admin.index', [
            'all_admin'     => $all_admin
        ]);
    }


    /**
     * 
     */
    public function password_change(){
        return view('changepassword');
    }



    /**
     * 
     */
    public function updatePassword(Request $request){

       
        $user_id = Auth::user() -> id;
        $user_has_pass = Auth::user() -> password;

        if( password_verify($request -> old_password, $user_has_pass) == true ){

            if( $request -> new_password == $request -> password_confirmation ){

                $update = User::find($user_id);
                $update -> password = password_hash($request -> new_password, PASSWORD_DEFAULT);
                $update -> update();

                return redirect() -> back() -> with('success', 'Password Updated Successfully !');

            }else{
                return redirect() -> back() -> with('wrong', 'Both are not same !');

            }

        }else{
            return redirect() -> back() -> with('wrong', 'Password Does not Match !');

        }

    }




    /**
     * 
     */
   



}
