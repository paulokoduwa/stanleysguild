<?php
session_start();
include("../php/conn.php");

    if (isset($_POST["submit_button"])){
       //if the submit button on the login page is clicked it should run the following code
       
       if (empty($_POST["email"]) || empty($_POST["pwd"])){

           header("location:index.php");
       }
       else{
           $email           =   $_POST["email"];
           $pwdMD5          =   md5($_POST["pwd"]);
           $check           =   mysqli_query($conn,"SELECT * FROM school_data WHERE email='$email'");
           $number_of_rows  =   mysqli_num_rows($check);

           if ($number_of_rows > 0) {
                 
                    while ($row = mysqli_fetch_array($check)) {

                           $id  = $row["id"];
                           $pwd = $row["pwdhash"];
                    }

                    if($pwdMD5 == $pwd){

                           $SESSION["id"] = $id;
                           header("loaction:../school-dashboard");
                    }else{
                        header("loaction:index.php?err=Email or password incorrect");
                    }

           }else{
            header("loaction:index.php?err=Email or password incorrect");
           }
       }

    }



?>