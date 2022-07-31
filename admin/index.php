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

    <?php 
    $m_id=$UserData['m_id'];
    $e= "Select * from election where m_id='$m_id' order by id DESC";
    $run_e= mysqli_query($db,$e);
    while($see = mysqli_fetch_assoc($run_e)){

     ?>
   <div class="col-md-4">
    <div class="card">
  <img class="card-img-top" src="images/1.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title text-center" style="font-weight: 700"><?php echo $see['name'];?></h5>
    <p class="card-text"><?php echo $see['description'];?></p>
    <center>
    <a href="single_election.php?e_id=<?php echo $see['e_id']; ?>"  class="btn btn-primary" >Voir les details</a>
  </center>
  </div>
</div>
   </div>
   <?php } ?>


  </div>  

</section><br><br>

<?php include 'footer.php'; ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>