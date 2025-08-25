<?php

 $servername="localhost";
 $username="root";
 $password="";
 $databasename="60_C";

 $connect=mysqli_connect($servername,$username,$password,$databasename);


 if(!$connect){
    die("Connection failed:".mysqli_connect_error());
 }else{
    echo "<script>alert('database connected')</script>";
 }




?>