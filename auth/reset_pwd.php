<?php
include("../php/conn.php");
    if(isset($_POST["pwd_reset_btn"])){

            $email            = $_POST["pwd_reset"];
            $check_for_email  = mysqli_query($conn,"SELECT * FROM user_data WHERE email='$email'");
            $rows             = mysqli_num_rows($check_for_email);
            
            if ($rows > 0) {
                # send an email with link to reset password
                header("location:index.php?success=true");
            }else{
                #
                header("location:index.php?success=true");
            }
        }

?>