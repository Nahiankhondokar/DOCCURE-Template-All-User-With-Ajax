(function($){
    $(document).ready(function(){


            // Add New Student Modal Show
       $('a#add_user_btn').click(function(e){
            e.preventDefault();
            $('#add_user_modal').modal('show');
           
       }); 


            // Student Data Store
        $(document).on('submit', 'form#add_user_form', function(e){
            e.preventDefault();
            
                // Get Data
            let name = $('form#add_user_form input[name="name"]').val();
            let email = $('form#add_user_form input[name="email"]').val();
            let cell = $('form#add_user_form input[name="cell"]').val();
            let uname = $('form#add_user_form input[name="uname"]').val();
            let subject = $('form#add_user_form input[name="subject"]').val();

            
                // Email Check Resource from W3 School
            let checkEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;               

                // Validation System
            if( name == '' || email == '' || cell == '' || uname == '' || subject == '' ){
                $('.msg').html(customMsg('All Feilds are Required !'));
            }else if( checkEmail.test(email) == false  ){
                $('.msg').html(customMsg('Invalid Email Address !', 'warning'));
            }else{

                    // Ajax System For Data Sending

                $.ajax({
                    url : 'student/store',
                    method : 'POST',
                    data : new FormData(this),
                    contentType : false,
                    processData : false,
                    success : function(data){
                        allStudent()
                        $('form#add_user_form')[0].reset();
                        $('.msg').html(customMsg('Student Added Successfully', 'success'));
                       
                    }
                });

             }

        });





        // Single Student Show

        $(document).on('click', '#stu_view_btn', function(e){
            e.preventDefault();

            let stu_id = $(this).attr('viewId');
            
            $.ajax({
                url : 'student/profile/' + stu_id,
                success : function(data){

                    let student_data = JSON.parse(data);
                    
                    $('.modal-header h3#stu_header').html(student_data.name + " ' " +'s Profile');
                    $('table#student_profile_table tr td#name').html(student_data.name);
                    $('table#student_profile_table tr td#email').html(student_data.email);
                    $('table#student_profile_table tr td#cell').html(student_data.cell);
                    $('table#student_profile_table tr td#uname').html(student_data.uname);
                    $('table#student_profile_table tr td#subject').html(student_data.subject);
                    $('#student_profile_modal img').attr('src', 'media/student/' + student_data.photo);
                    $('#student_profile_modal').modal('show');

                }
            });

            
        });





        // Student Delete

        $(document).on('click', '#stu_delete_btn', function(e){
            e.preventDefault();

                // Del id
            let del_id = $(this).attr('deleteId');

                // Alert Message
            let con = confirm('are you sure ?');

            if( con == false ){
                return false;
            }else{

                    // Ajax request
                $.ajax({
                    url : 'student/delete/' + del_id,
                    success : function(data){
                        allStudent()
                        $('.card-header .del_msg').html(customMsg('Student Deleted Successfully', 'success'));
                       
                    }
                });
                
            }

        });





        // Student Edit

        $(document).on('click', '#stu_edit_btn', function(e){
            e.preventDefault();

            // eidt id
            let edit_id = $(this).attr('editId');


            $.ajax({
                url : 'student/edit/' + edit_id,
                success : function(data){

                    let edit_student = JSON.parse(data);

                    $('form#edit_student_form input[name="name"]').val(edit_student.name);
                    $('form#edit_student_form input[name="id"]').val(edit_student.id);
                    $('form#edit_student_form input[name="email"]').val(edit_student.email);
                    $('form#edit_student_form input[name="cell"]').val(edit_student.cell);
                    $('form#edit_student_form input[name="uname"]').val(edit_student.uname);
                    $('form#edit_student_form input[name="subject"]').val(edit_student.subject);
                    $('form#edit_student_form input[name="old_photo"]').val(edit_student.photo);
                    $('form#edit_student_form img').attr( 'src', 'media/student/' + edit_student.photo);
                    $('#edit_student_modal').modal('show');
                }
            });
            
        });




        // Student Update

        $(document).on('submit', '#edit_student_form', function(e){
            e.preventDefault();
            
                // Update id
            let update_id = $('form#edit_student_form input[name="id"]').val();


            $.ajax({
                url : 'student/update/' + update_id,
                method : 'POST',
                data : new FormData(this),
                contentType : false,
                processData : false,
                success : function(data){

                    allStudent()
                    $('.del_msg').html(customMsg('Student Updated Successfully', 'success'));
                    $('#edit_student_form')[0].reset(); 
                    $('#edit_student_modal').modal('hide');

                }
            });


        });





       










    })
})(jQuery)