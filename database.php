<?php

use function PHPSTORM_META\type;

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";

    // $conn = mysqli_connect($db_server,
    //                        $db_user,
    //                        $db_pass ,
    //                        $db_name);

    try{
        $conn = mysqli_connect($db_server,
                                $db_user,
                                $db_pass ,
                                $db_name);


    }
    catch(mysqli_sql_exception){
        echo"Disconnected From Xampp !!! ";

    }

    
    if($conn){
        echo"You are connected !! ";
    }


?>