<?php

include '/home/vol14_1/epizy.com/epiz_24089560/htdocs/Township/scripts/connectsql.php';

$naam = $_POST["naam"];
$genre = $_POST["genre"];
$leeftijd = $_POST["leeftijd"];
$beschikbaar = $_POST["beschikbaar"];
$email = $_POST["email"];
$beschrijving = $_POST["beschrijving"];



// Get image name
$image = $_FILES['image']['name'];

// image file directory
$target = "/home/vol14_1/epizy.com/epiz_24089560/htdocs/Township/scripts/img/".basename($image);


$sql = "INSERT INTO aanmelding (naam,genre,leeftijd,beschrijving,beschikbaar,image,email) VALUES ('$naam', '$genre', '$leeftijd', '$beschrijving', '$beschikbaar', '$image', '$email')";

// execute query
mysqli_query($con, $sql);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Profiel Succesvol Aangemaakt";
}else{
    $msg = "Er is iets misgegaan, probeer het later opnieuw...";
  	}


echo "$msg";

    echo "<script>
        setTimeout(redirect, 1000);
        function redirect()
        {
            window.location.href = 'registratie_sucess.html';
        }
    </script>";

?>