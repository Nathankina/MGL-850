<!doctype html>
<?php session_start(); ?>
<?php include 'admin/db.php'; ?>
<?php
  if(isset($_SESSION['is_UserLogin'])){
  $id= $_SESSION['id'];
 
    $SelectUser = mysqli_query($db,"SELECT * from users where id = '$id'");
    $UserData = mysqli_fetch_array($SelectUser);
  }
  else{
    //echo "<script>window.open('login.php','_self');</script>";
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
  
<?php include'header.php'; ?>
<section >
  
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/6.jpg" class="d-block w-100" alt="..." style="height: 90vh">
    </div>

<!--     <div class="carousel-item ">
      <img src="images/3.jpg" class="d-block w-100" alt="..." style="height: 90vh">
    </div> -->

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<section class="container section">
  
  <div class="row">
 <div class="col-md-5">
  <p class="col1">Des élections impeccables et simplifiées.</p>
 </div>

  <div class="col-md-2">
    <img src="images/2.png" style="width: 150px">
  
 </div>

  <div class="col-md-5">
    <p style="text-align: justify; color: black">Des milliers de personnes comptent sur ONVOTE pour faire entendre leur voix électorale. Nos protocoles sécurisés, nos solutions faciles à utiliser et flexibles transforment les élections dans tous les secteurs.</p>
 </div>

   </div>
</section>

<section class="container section">

  <div class="title text-center">

    <h4>Élections en cours</h4>
<!--     <p>Vous pouvez avoir un aperçu de toutes les élections à venir qui se déroulent partout au Québec.</p> -->
    <center>
    <hr class="line">
  </center>

   </div> 

   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="single_election.html" class="btn btn-primary">Voir les details</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
 <a href="#" class="btn btn-primary">Voir les details</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
 <a href="#" class="btn btn-primary">Voir les details</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  


</section>


<?php include'footer.php'; ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>