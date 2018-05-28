<?php
session_start();

//get the hash from url and check for same in database
$school = $_GET["hash"];
$hash = mysqli_query($conn,"SELECT * FROM school_data WHERE hash='$school'");






?>