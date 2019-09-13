<?php

include "hedas.php";

?>
<link rel="stylesheet" type="text/css" href="css/login2Style.css">
    
     
<br>
<div class="container" style="background-color: #4863A0">
    <div id="login2" style="color: brown;">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12" style="height: auto;">
                        <form id="login-form" class="form mb-2" action="" method="post" style="height: auto;">
                            <input type="submit"name="submit" class="btn btn-info btn-md" value="Back" style="padding-top: 5%;" />
                            <h3 class="text-center text-info">Registration</h3>
                            <!--serial number div-->
                             <div class="form-group">
                               
                            </div>
                            <div class="form-group">
                                <label for="first_name" class="text-info">First Name:<span style="color: red;display: none">fill name*</span></label><br>
                                <input type="text" name="first_name" id="first_name" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label for="last_name" class="text-info">Last Name:<span style="color: red;display: none">fill last name*</span></label><br>
                                <input type="text" name="last_name" id="last_name" class="form-control stringed">
                            </div>
                            <div class="form-group">
                                <label for="gender" class="text-info">Gender:</label><br>
                                <input type="radio" class="radio-inline" name="gender" id="gender" value="male" class="form-control">Male
                                <input type="radio" class="radio-inline" name="gender" id="gender" value="female" class="form-control">Female
                            </div>
                            
   
                            <div class="form-group">
                                <label for="username" class="text-info">Email:<span style="color: red;display: none">fill email*</span></label><br>
                                <input type="email" name="user_email" id="user_email" class="form-control stringed">
                            </div>
                            <div class="form-group">
                                <label for="p_password" class="text-info">Passwords:<span style="color: red;display: none">fill Password*</span></label><br>
                                <input type="password" name="p_password" id="p_password" class="form-control stringed">
                            </div>
                    
                            <div class="form-group">
                                <label for="home_address" class="text-info">Home Address:<span style="color: red;display: none">fill address*</span></label><br>
                                <input type="text" name="home_address" id="home_address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="postal_address" class="text-info"> Postal Address:<span style="color: red;display: none">fill address*</span></label><br>
                                <input type="text" name="postal_address" id="postal_address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact" class="text-info">Contact:<span style="color: red;display: none">fill Contact*</span></label><br>
                                <input type="text" name="cellphone" id="cellphone" class="form-control numbers">
                            </div>
                             <div class="form-group">
                                <label for="contact" class="text-info">locations:<span style="color: red;display: none">fill Location*</span></label><br>
                                <input type="text" name="locations" id="locations" class="form-control numbers">
                            </div> 
                            
                            <div class="form-group">
                                <label for="user_type" class="text-info">Occupation:</label><br>
                                <input type="radio" class="radio-inline" name="user_type" id="user_type" value="student" class="form-control" >Student
                                <input type="radio" class="radio-inline" name="user_type" id="user_type" value="employee" class="form-control">Employee
                            </div>
                            <div class="file-field">
                           <div class="btn btn-outline-info waves-effect btn-sm float-left">
                           <span>Upload profile Image</span>
                           <input id="user_picture" name="user_picture" type="file">
                           </div><br><br>
                            <div class="form-group">
                                
                                <input type="button" id="regis" name="submit" class="btn btn-info btn-md" value="Save" onclick="validateAfter();" />
                                <input type="reset" id="regiss" name="submit" class="btn btn-info btn-md" value="ShowAll" onclick="displayAll();" />
                                
                                <input type="submit"name="submit" class="btn btn-info btn-md" value="Submit"/>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>

$(document).ready(function(){

console.log("mamammia");

$.ajax({
        url:'api.php',
        method:'GET',
        dataType: "html",   //expect html to be returned 
        data:{action:"listall"},
          async: true,
        success: function (response) {
           //$(".mogos").html(response);
           // var ret = JSON.parse(response);
           console.log(response);
           
           
}
});


});

//////////////////////psot//////////////////////////
function validateAfter(){

	var fileUpload = $("#user_picture").get(0);
	var files = fileUpload.files[0];
	
    


   var first_name =$("#first_name").val();
   var  last_name=$("#last_name").val();
   var user_email =$('#user_email').val();
   var p_password =$('#p_password').val();
   var home_address =$("#home_address").val();
   var postal_address =$("#postal_address").val();
   var cellphone =$("#cellphone").val();
   var locations =$("#locations").val();
   var user_type =$('#user_type').val();//radio
   var gender  =$("#gender").val();//radio
   var image_file=files;   
    
       
    console.log(image_file);
   
   $.ajax({
        url:'api.php',
        method:'POST',
        processData: false,
        contentType:false,
        data:{action:"insertings"},
          async: true,
        success: function (response) {
           
             console.log('second inserted');

   
}
});
}



</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


