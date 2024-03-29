<?php
include 'scripts/connectsql.php';
//wanneer de form voor het toevoegen van een profiel verstuurd word, word er ingevoerd dat de artiest met desbetreffende id toegevoegd word
if(isset($_POST['Toevoegen'])){
  $ID = $_POST["ArtistId"];
  $sql = "UPDATE aanmelding  SET geaccepteerd = 'JA' WHERE accountid = $ID";
  mysqli_query($con, $sql);
  header("location:artiesten.php");
}
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
        <a class="nav-link" href="tickets.php">Evenementen</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="artiesten.php">Artiesten</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>      
      <hr/>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="login.html">Login</a>
        </li>
    </ul>
  </div>
</nav>

<!-- Content -->
  <!-- start medewerker buttons-->
    <div class="container p-0 col-12 pt-3">   
      <div class="d-none" id="Medewerker" >
        <div class="row m-0">
          <div class="ml-md-auto pr-md-5 pr-lg-4 text-center my-3">
            <button type="button" class="btn btn-success mb-1 mb-md-0" data-toggle="modal" data-target="#ArtistAdd">Artiest toevoegen</button>
            <!--<button type="button" class="btn btn-warning mb-1 mb-md-0" data-toggle="modal" data-target="#ArtistChange">Artiest aanpassen</button>-->
            <button type="button" class="btn btn-danger mb-1 mb-md-0" data-toggle="modal" data-target="#ArtistDelete">Artiest verwijderen</button>
            <a href="tabel.php" class="btn btn-dark" target="_blank">klik hier om de aanmeldingen te zien</a>
          </div>
        </div>
      </div>
    </div>
  <!--end medewerker buttons-->

  <!--start link naar artiest aanmelden-->
    <div class="row m-0 text-center">
      <h4 class="mx-auto my-3">Wilt uw zich aanmelden als artiest? klik <a href="registratie-artiesten.html" class="link">hier</a></h4>
    </div>
  <!--end link naar artiest aanmelden-->

  <!--start modal artiest toevoegen-->
  <div class="modal fade" id="ArtistAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Artiest toevoegen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="artiesten.php">
          <div class="modal-body">
            <div class="form-group">
              <label for="ArtiestId">Artiest id</label>
              <input type="number" name="ArtistId" class="form-control" required> 
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten</button>
            <input type="submit" class="btn btn-success" name="Toevoegen" value="Artiest toevoegen">
          </div>
        </form>  
      </div>
    </div>
  </div>
  <!--end modal artiest toevoegen-->

  <!--start modal artiest aanpassen-->
  <!--end modal artiest aanpassen-->

  <!--start modal artiest verwijderen-->
  <div class="modal fade" id="ArtistDelete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Artiest verwijderen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="artiesten.php">
          <div class="modal-body">
            <div class="form-group">
              <label for="DeleteArtist">Artiest Naam</label>
              <!--start php voor artiest verwijderen-->
                <select class="form-control" name="ArtistDelete" required>
                  <?php
                    $sql = "SELECT * FROM aanmelding";
                    $result = mysqli_query($con,$sql);                    
                    while($row = mysqli_fetch_array($result)){
                      echo "<option name='".$row['accountid']."' value='".$row['accountid']."'>".$row['naam']."</option>";
                    }
                  ?>
                </select>
              <!--end php voor artiest verwijderen-->
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
            <input type="submit" class="btn btn-danger" name="delete" value="Artiest verwijderen">
          </div>
        </form>  
      </div>
    </div>
  </div>
  <!--end modal artiest verwijderen-->

  <!--start code om sql rij te verwijderen-->
    <?php
      if(!empty($_POST['ArtistDelete'])){
        if(isset($_POST['delete'])){
          $sql = "DELETE FROM aanmelding WHERE accountid =".$_POST['ArtistDelete'];
          $result = mysqli_query($con, $sql);
        }else{
          $_POST['delete'] == null;
        }
      }
    ?>
  <!--end code om sql rij te verwijderen-->

  <!-- start standaard artiesten card, en code die de artiesten toevoegd aan de pagina-->
  <div class="row justify-content-center m-0">
    <?php
      $sql = "SELECT * FROM aanmelding WHERE geaccepteerd = 'JA'";
      $result = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_array($result)){
        echo "<div class='card col-12 col-md-3 my-3 mx-4 mx-md-4 mx-xl-5 rounded-1 px-0'>";
        echo "<div class='card-body px-0 py-2'>";
        echo "<h5 class='card-title mx-2'>".$row['naam']."</h5>";
        echo "<img src='scripts/img/".$row['image']."' class='card-img-top pb-1 my-1 d-lg-none' alt='".$row['naam']."' height='166' width='288' style='object-fit: scale-down;'>";
        echo "<img src='scripts/img/".$row['image']."' class='card-img-top pb-1 my-1 d-none d-lg-flex' alt='".$row['naam']."' height='253' width='443' style='object-fit: scale-down;'>";
        echo "<p class='mx-2'>
        <b>Genre: </b>".$row['genre']."<br/>
        <b>Leeftijd: </b>".$row['leeftijd']."<br/>
        <b>Dagen Beschikbaar: </b>".$row['beschikbaar']."</p>"; 
        echo "<hr class='mx-1'>";
        echo "<h5 class='mx-3 mx-sm-2'><b>Over deze artiest</b></h5>";
        echo "<p class='card-text h6 font-weight-normal mx-2 mx-sm-1 px-2'>".$row['beschrijving']."</p>";       
        echo "</div>";
        echo "</div>";
      }
    ?>
  </div>
<!-- end standaard artiesten card, en code die de artiesten toevoegd aan de pagina-->


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
<script>
  var Admin = sessionStorage.getItem("Admin");
  if (Admin == "YES")
  {
    document.getElementById("Medewerker").className = "d-none d-lg-block";
  }
</script>
<script src="scripts/jquery-3.3.1.slim.min.js"></script>
<script src="scripts/popper.min.js"></script>
<script src="scripts/bootstrap.js"></script>
</body>
</html>