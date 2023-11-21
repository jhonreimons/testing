<?php

     $username ='admin';
     $password ='admin123.,';
     $server   ='database-jhon.cu18g6uuobva.us-east-1.rds.amazonaws.com';
     $db_name  ='himatek';

     $conn = mysqli_connect("$server","$username","$password","$db_name");

     if(!$conn){
          echo "error";
     }


?>

