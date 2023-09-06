<?php

   $host= "localhost";
   $dbuser = "root";
   $dbpassword = "";
   $dbname = "ames";

   $conn=new mysqli($host, $dbuser, $dbpassword, $dbname);
   if(!$conn){
    echo " connection succesfully";
}
?>