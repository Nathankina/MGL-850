<!doctype html>
<?php session_start(); ?>
<?php include 'db.php'; ?>
<?php
  if(isset($_SESSION['is_VilleLogin'])){
  $id= $_SESSION['id'];
 
    $SelectUser = mysqli_query($db,"SELECT * from municipalite where id = '$id'");
    $UserData = mysqli_fetch_array($SelectUser);
  }
  else{
    echo "<script>window.open('login.php','_self');</script>";
  }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MGL850</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="asset/css/all.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
  </head>
  <body>

  <?php include 'header.php'; ?>

<section class="container section">

  <div class="row">
   <div class="col-md-4">
    <div class="card">
  <img class="card-img-top" src="images/1.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Titre de l'Election</h5>
    <p class="card-text">sunt in culpa qui officia deserunt mollit anim id est laborum."Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
    <center>
    <a href="single_election.html" class="btn btn-primary">Voir les details</a>
  </center>
  </div>
</div>
   </div>

   <div class="col-md-4">
    <div class="card">
  <img class="card-img-top" src="images/3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Titre de l'Election</h5>
    <p class="card-text">sunt in culpa qui officia deserunt mollit anim id est laborum."Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
    <center>
    <a href="single_election.html" class="btn btn-primary">Voir les details</a>
  </center>
  </div>
</div>
   </div>

   <div class="col-md-4">
    <div class="card">
  <img class="card-img-top" src="images/1.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Titre de l'Election</h5>
    <p class="card-text">sunt in culpa qui officia deserunt mollit anim id est laborum."Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
    <center>
    <a href="single_election.html" class="btn btn-primary">Voir les details</a>
  </center>
  </div>
</div>
   </div>
  </div>  

</section>


<footer style=" background-color: black">
  
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 " >
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. Tous les droits sont réservés.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#" class="text-white me-4">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="#" class="text-white me-4">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="#" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
     
    </div>
    <!-- Right -->
  </div>
</footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>