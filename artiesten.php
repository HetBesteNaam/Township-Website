<!DOCTYPE html>
<html>
<head>
  <title>Township</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" href="Scripts/bootstrap.css" type="text/css">
<link rel="icon" href="/scripts/img/logo.webp">
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
        <a class="nav-link" href="artiesten.html">Artiesten</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
      <hr/>
    </ul>
  </div>
</nav>

<!-- Content -->
  <!--start aanmeldingen tabel-->

  <!--end aanmeldingen tabel-->

  <!-- start medewerker buttons-->
    <div class="container p-0 col-12 pt-3">
      <div id="Medewerker" class="d-none">
        <div class="row m-0">
          <div class="ml-md-auto pr-md-5 pr-lg-4 text-center">
            <button type="button" class="btn btn-success mb-1 mb-md-0" data-toggle="modal" data-target="#ArtistAdd">Artiest toevoegen</button>
            <button type="button" class="btn btn-warning mb-1 mb-md-0" data-toggle="modal" data-target="#ArtistChange">Artiest aanpassen</button>
            <button type="button" class="btn btn-danger mb-1 mb-md-0" data-toggle="modal" data-target="#Artistdelete">Artiest verwijderen</button>
          </div>
        </div>
      </div>
    </div>
  <!--end medewerker buttons-->

  <!--start link naar artiest aanmelden-->
    <div class="row m-0">
      <h4 class="m-auto">Wilt uw zich aanmelden als artiest? klik <a href="registratie-artiesten.html" class="link">hier</a></h4>
    </div>
  <!--end link naar artiest aanmelden-->

  <!--start artiesten cards-->

  <!--end artiesten cards-->

  <!--start modal artiest toevoegen-->
    <div class="modal fade" id="ArtistAdd" tabindex="-1" role="dialog" aria-hidden="true">
    
    </div>
  <!--end modal artiest toevoegen-->

  <!--start modal artiest aanpassen-->
  <!--end modal artiest aanpassen-->

  <!--start modal artiest verwijderen-->
  <!--end modal artiest verwijderen-->


<!-- Footer -->
<footer class="bg-primary text-light">
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
<script src="/scripts/jquery-3.3.1.slim.min.js"></script>
<script src="/scripts/popper.min.js"></script>
<script src="/scripts/bootstrap.js"></script>
</body>
</html>