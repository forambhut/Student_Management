<?php
    $dbhost="localhost"; 
                    
    $dbuser = "root"; 

    $dbpass = ""; 

    $mysql =  mysqli_connect($dbhost, $dbuser, $dbpass, 'student_data');

    if(!$mysql){
    die(mysqli_error);
    }
?>