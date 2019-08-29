<?php
include 'scripts/connectsql.php';
?>


<!DOCTYPE html>
<html>
<head>
  <title>Township</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" href="scripts/bootstrap.css" type="text/css">
<link href="scripts/img/logo.ico" rel="shortcut icon" type="image/x-icon" />
<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top">
  <a class="navbar-brand" href="home.html">
    <img src="scripts/img/logo.png" class="navlogo" width="50" height="50">          
  </a>
  <a class="navbar-brand" href="#">
    <h5 class="d-md-none">Artiesten</h5>        
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.html">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tickets</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="artiesten.php">Artiesten</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
      <hr/>
    </ul>
  </div>
</nav>

<!-- Content -->
  <!-- start tabel aanmeldingen-->
    <div class="container p-0 col-12 pt-3 d-none d-md-block">
      <div class="row m-0 p-0">
        <div class="mx-auto">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Naam</th>
                <th scope="col">Genre</th>
                <th scope="col">Leeftijd</th>
                <th scope="col">Beschrijving</th>
                <th scope="col">Dagen</th>
                <th scope="col">Email</th>
                <th scope="col">toegevoegd</th>
              </tr>
            </thead>
            <tbody>
              <?php
                #misschien dat er nog een include moet komen naar connectsql
                $sql = "SELECT * FROM aanmelding";
                $result = mysqli_query($con,$sql);
                if(!$result){
                  printf("Error: %s\n", mysqli_error($con));
                  exit();
                }
                while($row = mysqli_fetch_array($result)){
                  echo "
                    <tr>
                      <th scope='row'>".$row['accountid']."</th>
                      <td>".$row['naam']."</td>
                      <td>".$row['genre']."</td>
                      <td>".$row['leeftijd']."</td>
                      <td>".$row['beschrijving']."</td>
                      <td>".$row['beschikbaar']."</td>
                      <td>".$row['email']."</td>
                      <td>".$row['geaccepteerd']."</td>                   
                   </tr>";
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>    
        
  <!--end tabel met aanmeldingen-->
  <!-- Footer -->
<footer class="bg-primary text-light fixed-bottom">
          <div class="footer">
            <br>
              <div class="footermark"><p class="text-center mb-0">&copy;<script>document.write(new Date().getFullYear());</script> - <a href="#" class="footersign" class="text-light">Township</a></p>
              </div>
              <div class="footerinfo text-center">
                  <a href="#" class="algemeen text-light">Algemene Voorwaarden</a><br>
                  <a href="#" class="persoon text-light">Persoonsgegevens</a><br>
                  <a href="#" class="cookieverklaring text-light">Cookieverklaring</a><br>
                  <a href="#" class="privacy text-light">Privacyverklaring</a>
                </div>
              <div class="socialmedia text-center">
                  <a href="#" class="insta text-light"><i class="fab fa-instagram"></i></a>
                  <a href="https://www.facebook.com/poppodium" Target="_blank" class="facebook text-light"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="twitter text-light"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="yt text-light"><i class="fab fa-youtube"></i></a>
              </div>
              <br>
          </div>
</footer>

<!-- Javascript -->
<script src="scripts/jquery-3.3.1.slim.min.js"></script>
<script src="scripts/popper.min.js"></script>
<script src="scripts/bootstrap.js"></script>
</body>
</html>