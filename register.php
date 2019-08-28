<?php

include 'connectsql.php';

$naam = $_POST["naam"];
$genre = $_POST["genre"];
$leeftijd = $_POST["leeftijd"];
$beschikbaar = $_POST["beschikbaar"];
$email = $_POST["email"];



// Get image name
$image = $_FILES['image']['name'];

// image file directory
$target = "scripts/images/".basename($image);

$sql = "INSERT INTO registratie VALUES ('$naam', '$genre', '$leeftijd', '$beschrijving', '$beschikbaar', '$image', '$email')";
// execute query
mysqli_query($con, $sql);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Profiel Succesvol Aangemaakt";
}else{
    $msg = "Er is iets misgegaan, probeer het later opnieuw...";
  	}


  ?>