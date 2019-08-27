<?php

    $server="sql201.epizy.com";
    $user="epiz_24089560";
    $wachtwoord="be1gvMh8Tda6Irm";
    $database="epiz_24089560_township_db";
  
    
    //verbinding maken met mysql database service
    
    $con = mysqli_connect($server,$user,$wachtwoord,$database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  ?>
