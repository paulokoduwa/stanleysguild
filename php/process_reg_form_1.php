<?php 
include("conn.php");

                $name =                   $_POST["name"];

                $school =                 $_POST["school_name"];

                $password =               $_POST["password"];

                $confirm_password =       $_POST["confirm_password"];

                $email =                  $_POST["email"];

        
        if(empty($email) || empty($name) || empty($school) || empty($password) || empty($confirm_password)){
            header("location:../register-school?error=Empty field");
        }else{

            if($password == $confirm_password){

            //first part of registration the data is stored in user_data table 
            $query = mysqli_query($conn,"INSERT INTO user_data SET name='$name', school='$school', password='$password', email='$email'");
            
            //the remaining part of the form data is stored in the school_data table

            
            $query = mysqli_query($conn,"INSERT INTO school_data SET name='$name', school='$school', password='$password', email='$email'");
stanleysguild/master
            header("location:../register-school/final_registration.php");
        
        }else{
            header("location:../register-school?error=miss match password");
        }

        }































?>