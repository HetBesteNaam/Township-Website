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
		echo "<h2 align='center'>You are now logged in, you will be redirected in a few seconds</h2>";
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
			window.location.href = 'artiesten.php';
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