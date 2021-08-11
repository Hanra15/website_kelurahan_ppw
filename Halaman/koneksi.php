<?php

    // $server = "localhost";
    // $user = "root";
    // $pass = "";
    // $dbname = "db_kelurahan";
    // $conn = mysqli_connect($server, $user, $pass, $dbname);



    $user = "root";
    $pass = "";
    $db   = "db_kelurahan";
    $host = "localhost";
    $conn = mysqli_connect($host,$user,$pass,$db);
    /*if(mysqli_connect_error()){
        echo "Database tidak terhubung";
    }
    else{
        echo "Database tersambung dengan baik";
    }
    */
?>