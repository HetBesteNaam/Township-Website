<?php

    $server="localhost";
    $user="root";
    $wachtwoord="";
    $database="township";
  
    
    //verbinding maken met mysql database service
    
    $con = mysqli_connect($server,$user,$wachtwoord,$database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  ?>
