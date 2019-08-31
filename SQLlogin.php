<?php
$session;
$Gebruikersnaam = $_POST['gebruikersnaam'];
$Wachtwoord = $_POST['wachtwoord'];

if (empty($Gebruikersnaam || $Wachtwoord))
{
	echo "<h3 align='center'>Niet alles in ingevuld.<br>
	<a href='login.html'>Terug</a></h3>";
}
else
{
	$servername="localhost";
    $username="root";
    $password="";
    $dbname="township";

	$conn = new mysqli($servername, $username, $password, $dbname);
	
	$Server_Gebruikersnaam = mysqli_query($conn, "SELECT `naam`,`wachtwoord` FROM `accounts` WHERE `naam`='$Gebruikersnaam'");
	$Server_Wachtwoord = mysqli_query($conn, "SELECT `wachtwoord` FROM `accounts` WHERE wachtwoord='$Wachtwoord'");
	$Server_Admin = mysqli_query($conn, "SELECT `admin` FROM `accounts` WHERE `naam`='$Gebruikersnaam'");

	$Server_Gebruikersnaam_result = mysqli_fetch_assoc ($Server_Gebruikersnaam)["naam"];
	$Server_Wachtwoord_result = mysqli_fetch_assoc ($Server_Wachtwoord)["wachtwoord"];
	$Server_Admin_result = mysqli_fetch_assoc ($Server_Admin)["admin"];

	if ($Gebruikersnaam == $Server_Gebruikersnaam_result && $Wachtwoord == $Server_Wachtwoord_result)
	{
		echo("<html><head><title>Redirecting...</title><link rel='stylesheet' href='scripts/bootstrap.css' type='text/css'></head><body><script src='/scripts/jquery-3.3.1.slim.min.js'></script>
		<script src='scripts/popper.min.js'></script>
		<script src='scripts/bootstrap.js'></script></body></html>");
		echo "<h2 class='text-center my-5'><div class='spinner-border text-success mx-auto' role='status'><span class='sr-only'>Loading...</span></div>     Ingelogd. U wordt nu doorgestuurd.</h2>";
		echo "<script> 
		var Gebruikersnaam = '$Gebruikersnaam';
		var Admin = '$Server_Admin_result';
		sessionStorage.setItem('Username', Gebruikersnaam);
		sessionStorage.setItem('Admin', Admin);
		</script>";
		echo ("<script type='text/javascript'>
		setTimeout(redirect, 3000);
		function redirect()
		{
			window.location.href = 'home.html';
		}
		</script>");
	}
	else
	{
		echo "<h3 align='center'>Wachtwoord of gebruikersnaam verkeerd.<br>
	<a href='login.html'>Terug</a></h3>";
	}
}
?>