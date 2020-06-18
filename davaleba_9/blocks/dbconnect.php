<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "mydata.1";

    $connection = mysqli_connect($server,$user,$password,$dbname);
    if(!$connection){
        die("Connection error!!!");
    }
?>