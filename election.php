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
  <?php include 'header.php'; ?>
<section class="container section">

  <div class="row">
<?php

  if(!isset($_SESSION['is_UserLogin'])){}

  else{

  $sql="Select * from election order by id DESC";
  $run= mysqli_query($db,$sql);
  while($row = mysqli_fetch_assoc($run)){
    $date = $row['start'];
    $now= date('y-m-d');
    if($date== $now){
        
        //exec(‘python blockchain/lancer_blockchain.py’);
   }

 ?>


   <div class="col-md-4">
    <div class="card">
  <img class="card-img-top" src="images/1.png" alt="Card image cap">
  <div class="card-body">
    <h6 class="card-title" style="color: black; text-align: center; font-weight:600"><?php echo $row['name']; ?></h6>
    <p class="card-text" style="text-align:justify;"><?php echo $row['description']; ?></p>
    <center>
    <a href="single_election.php?e_id=<?php echo $row['e_id']; ?>" class="btn btn-primary">Voir les details</a>
  </center>
  </div>
</div>
   </div>

<?php } }?>
  
   
  </div>  

</section>


<?php include 'footer.php'; ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>