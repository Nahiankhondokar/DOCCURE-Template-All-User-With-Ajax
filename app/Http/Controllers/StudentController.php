<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
    /**
     *  
     */
    public function store(Request $request){
        
        $unique_name = '';
        if( $request -> hasFile('photo') ){

            $file = $request -> file('photo');
            $unique_name = md5(time() . rand()) . '.' . $file -> getClientOriginalExtension();
            $file -> move(public_path('media/student'), $unique_name);

        }



        return Student::create([
            'name'       => $request -> name,
            'email'      => $request -> email,
            'cell'       => $request -> cell,
            'uname'      => $request -> uname,
            'subject'    => $request -> subject,
            'photo'      => $unique_name

        ]);

       
    }




    /**
     *  Data Showing in the table by using Ajax in Laravel
     */
    public function all(){

            // Get All Data
        $all_students = Student::latest() -> get();

            // Data Showing System by laravel ajax
        $i = 1;
        $content = "";
        foreach($all_students as $student){

            $content .='<tr>';
            $content .='<td>'. $i; $i++ .'</td>';
            $content .='<td>'. $student -> name .'</td>';
            $content .='<td>'. $student -> email .'</td>';
            $content .='<td>'. $student -> uname .'</td>';
            $content .='<td>'. $student -> subject .'</td>';
            $content .='<td><img id="img" src="media/student/'. $student -> photo . '"></td>';
            $content .=
            '<td>'. 

            // View Button
            ' <a id="stu_view_btn" viewId=' .  $student -> id . ' class="btn btn-primary btn-sm" href="">view</a> ' .

            // Edit Button
            ' <a id="stu_edit_btn" editId=' . $student -> id .' class="btn btn-warning btn-sm" href="">Edit</a> ' .

            // Delete Button
            ' <a id="stu_delete_btn" deleteId=' . $student -> id .' class="btn btn-danger btn-sm" href="">Delete</a> ' 
            
            .'</td>';
            $content .='</tr>';

        };

        echo $content;

    }




    /**
     * 
     */
    public function profile($id){
        
        $all_student = Student::find($id);

        echo json_encode($all_student);
        
    }



    /**
     * 
     */
    public function delete($id){
        
        $delete_student = Student::find($id);
        $delete_student -> delete();

            // Photo Delete
        if( file_exists('media/student/' . $delete_student -> photo )){
            unlink('media/student/' . $delete_student -> photo);
        }
        

    }




    /**
     * 
     */
    public function edit($id){
        
        // Get data
        $edit_student = Student::find($id);
       
        // Array to String for Ajax by Json_encode
        echo json_encode($edit_student);

    }


    /**
     * 
     */
    public function update(Request $request, $id){


        // photo updating system
        $unique_name = '';
        if( $request -> hasFile('new_photo') ){

            $file = $request -> file('new_photo');
            $unique_name = md5(time() . rand()) . '.' . $file -> getClientOriginalExtension();
            $file -> move(public_path('media/student'), $unique_name);

            if( file_exists('media/student/' . $request -> old_photo ) ){
                unlink('media/student/' . $request -> old_photo);
            }

        }else{
            $unique_name = $request -> old_photo;
        }



            // Data Updating System
        $update_student = Student::find($id);
        $update_student -> name = $request -> name;
        $update_student -> email = $request -> email;
        $update_student -> cell = $request -> cell;
        $update_student -> uname = $request -> uname;
        $update_student -> subject = $request -> subject;
        $update_student -> photo = $unique_name;
        $update_student -> update();

        
    }



}
