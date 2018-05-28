<?php 
if(isset($_POST["free_plan"]) || isset($_POST["ideal_plan"]) || isset($_POST["prestige_plan"]) ){

    include("conn.php");
                    if(!empty($_POST["name"])){
                $name =                   $_POST["name"];
                    }

                    if(!empty($_POST["school_level"])){
                $school_level  =          $_POST["school_level"];
                    }

                    if(!empty( $_POST["school_level_other"])){
                $school_level_other =     $_POST["school_level_other"];
                    }

                    if(!empty($_POST["school_type"])){
                $school_type =            $_POST["school_type"];
                    }

                    if(!empty($_POST["what_mksunique"])){
                $what_mksunique =         $_POST["what_mksunique"];
                    }

                    if(!empty($POST["state"])){
                $state =                  $POST["state"];
                    }

                    if(!empty($_POST["school_city"])){
                $school_city =            $_POST["school_city"];
                    }

                    if(!empty($_POST["school_area"])){
                $school_area =            $_POST["school_area"];
                    }
                    
                    if(!empty($_POST["school_landmark"])){
                $school_landmark =        $_POST["school_landmark"];
                    }

                    if(!empty($_POST["school_address"])){
                $school_address =         $_POST["school_address"];
                    }

                    if(!empty($_POST["school_email"])){
                $school_email =           $_POST["school_email"];
                    }

                    if(!empty($_POST["curriculum"])){
                $curriculum =             $_POST["curriculum"];
                    }

                    if(!empty($_POST["school_facilities"])){
                $school_facilities =      $_POST["school_facilities"];
                    }

                    if(!empty($_POST["edu_scope"])){
                $edu_scope =              $_POST["edu_scope"];
                    }

                    if(!empty($_POST["club_activities"])){
                $club_activities =        $_POST["club_activities"];
                    }
                    if(!empty($_POST["extra_curricular"])){
                $extra_curricular =       $_POST["extra_curricular"];
                    }
                    if(!empty($_POST["admin_name"])){
                $admin_name =             $_POST["admin_name"];
                    }
                    if(!empty($_POST["admin_telephone"])){
                $admin_telephone =        $_POST["admin_telephone"];
                    }
                    if(!empty($_POST["awards"])){
                $awards =                 $_POST["awards"];
                    }
                    if(!empty($_POST["title"])){
                $title =                  $_POST["title"];
                    }
                    if(!empty($_POST["f_name"])){
                $f_name =                 $_POST["f_name"];
                    }
                    if(!empty($_POST["l_name"])){
                $l_name =                 $_POST["l_name"];
                    }
                    if(!empty($_POST["coordinator_email"])){
                $coordinator_email =       $_POST["coordinator_email"];
                    }
                    if(!empty($_POST["coordinator_tel"])){
                $coordinator_tel =         $_POST["coordinator_tel"];
                    }
                    if(!empty($_POST["coordinator_tel"])){
                $school_name =             $_POST["school_name"];
                    }
                    if(!empty($_POST["coordinator_tel"])){
                $pwd =                     $_POST["pwd"];
                    }
                        if(!empty($_POST["coordinator_tel"])){
                $pwd_confirm =             $_POST["pwd_confirm"];
                        } 

               

        
        if(isset($_POST["free_plan"])){
            $query1 = mysqli_query($conn,"SELECT * FROM user_data WHERE email='$email'");
            $query2 = mysqli_query($conn,"SELECT * FROM user_data WHERE school_name='$school_name'");

                if (mysqli_num_rows($query2) || mysqli_num_rows($query2) > 0) {
                    //error 234 is error from either repeat email or repeat school name 
                    
                    header("location:../register-school/register.php?error=234");

                }else{

                    if($pwd == $pwd_confirm){

                        $insert_to_user_data_query = mysqli_query($conn,"INSERT INTO user_data SET 
                        school_name='$school_name',
                        title='$title',
                        pwd='$pwd',
                        f_name='$f_name',
                        l_name='$l_name',
                        coordinator_email='$coordinator_email',
                        coordinator_tel='$coordinator_tel'");

                        $insert_to_user_data_query = mysqli_query($conn,"INSERT INTO school_data SET     
                        school_name='$school_name',
                        school_level='$school_level',
                        school_level_other='$school_level_other',
                        school_type='$school_type',
                        what_mksunique='$what_mksunique',
                        st='$state',
                        school_city='$school_city',
                        school_area='$school_area',
                        school_landmark='$school_landmark',
                        school_address='$school_address',
                        school_email='$school_email',
                        curriculum='$curriculum',
                        school_facilities='$school_facilities',
                        edu_scope='$edu_scope',
                        club_activities='$club_activities',
                        extra_curricular='$extra_curricular',
                        admin_name='$admin_name',
                        admin_telephone='$admin_telephone',
                        awards='$awards',approval='No'");

                        //set session for coordinators email
                        $_SESSION["coordinator_email"] = $coordinator_email;
                        header("location:../school-dashboard");
                    }else{
                        //password is not correct
                        }

                }
            }elseif ($_POST["ideal_plan"]) {
                # Link to payment page 
            }elseif ($_POST["prestige_plan"]) {
                # Lnk to payment page
            }
        
        }

       

























?>