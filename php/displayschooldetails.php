<?php



include("conn.php");

//select everything from table 'school_data'

$school_data         =  mysqli_query($conn,"SELECT * FROM school_data WHERE id='$id'");


//Check if there is any result 

$check_school_data   =  mysqli_num_rows($school_data);

if ($check_school_data > 0) {

        //loop out all the values in the table row
        while ($school_data_row = mysqli_fetch_array($school_data)) {
            # set all the values into separate variables

            $why_school            =   $school_data_row["why"];
            $proprietor_name       =   $school_data_row["proprietor_name"];
            $proprietor_phone      =   $school_data_row["proprietor_phone"];
            $school_facilities     =   $school_data_row["school_facilities"];
            $date_of_establishment =   $school_data_row["date_of_establishment"];
            $boarding_type         =   $school_data_row["boarding_type"];
            $curriculum            =   $school_data_row["curriculum"];
            $extracurricular       =   $school_data_row["extracurricular"];
            $club_activities       =   $school_data_row["club_activities"];
            $school_name           =   $school_data_row["school_name"];
            $contact_address       =   $school_data_row["contact_address"];
            $contact_phone         =   $school_data_row["contact_phone"];
            $school_website        =   $school_data_row["school_website"];   
            $admission_form        =   $school_data_row["admission_form"];
            
        }
}

//Display Images From A Folder with PHP


$files = glob("../school-profile/images/*.*");
for ($i=1; $i<count($files); $i++)
{
	$num = $files[$i];
	echo '<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
	}

?>