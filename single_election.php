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


<?php 

    if(isset($_GET['e_id'])){
    $e_id = $_GET['e_id'];

$a = "SELECT * from election where e_id='$e_id'";
$a1 = mysqli_query($db,$a); 
$row=mysqli_fetch_array($a1);

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
<section class="container section" >

  <div style="display: flex; margin: 0; width: 100%">

    <img src="images/1.png" style="width: 40%; height: 300px; ">
    
<p style=" text-align: justify; margin-left: 20px;"> <span style="font-size: 24px; text-align: center; font-weight: 600"><?php echo $row['name']; ?></span>
     <br><br>
      <span style="color: black; font-weight: 600">Date du début:</span> <?php echo $row['start']; ?>
      <br>
       <span style="color: black; font-weight: 600">Date de fin:</span> <?php echo $row['fin']; ?>

      <br>
      <?php echo $row['description']; ?>.<br><br>
      <span style="color:black; font-weight:600">Listes de candidats:</span><br><br>
      1. Nathan Kina<br>
      2. Carlos Menimo<br>
      3. Nicolas Beret.
       
    </p>
    
  </div>


    <?php 
    $e_id = $_GET['e_id'];
       $user_id = $UserData['user_id'];

 $c= "SELECT * FROM vote where user_id='$user_id' and e_id='$e_id'";
 $run_c= mysqli_query($db,$c);
   if(mysqli_num_rows($run_c)==1){

     ?>
   <p>  
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Emettre votre voix
  </a>
  </p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <form method="Post" enctype="multipart/form-data">
      <input type="radio" name="option" value="Nathan Kina" > Option 1 => Nathan Kina<br>
      <input type="radio" name="option" value="Carlos Menimo"> Option 2 => Carlos Menimo<br>
      <input type="radio" name="option" value="Nicolas Beret"> Option 3 => Nicolas Beret
 <br><br>
      <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Vous avez déjà soumis votre choix pour cette élection" disabled>
    </form>
  </div>
</div>
<?php }
else{ ?>

<p>  
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Emettre votre voix
  </a>
  </p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <form method="Post" enctype="multipart/form-data">
      <input type="radio" name="option" value="Nathan Kina" > Option 1 => Nathan Kina<br>
      <input type="radio" name="option" value="Carlos Menimo"> Option 2 => Carlos Menimo<br>
      <input type="radio" name="option" value="Nicolas Beret"> Option 3 => Nicolas Beret
 <br><br>
      <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Soumettre mon choix">
    </form>
  </div>
</div>


<?php } ?>
  

  
  

  
  

</section>

<section class="container section">

  <div class="title text-center">

    <h4>Autres Élections en cours</h4>
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

<?php include 'footer.php'; ?>

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header text-center" style="background-color: #199DF9; color: white">
        <h5 class="modal-title w-100" id="exampleModalLabel">Nom de l'Election</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
      <p>Les details du vote.....</p>
      <input type="checkbox" name="confirmation" required=""> Je confirme mon choix.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Enregistrer votre choix</button>
      </div>
    </form>
    </div>
  </div>
</div>
 -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </body>
</html>

<?php

 if(isset($_POST['submit'])){

      $option= mysqli_real_escape_string($db,trim($_POST['option']));
       $e_id = $_GET['e_id'];
       $user_id = $UserData['user_id'];
       // exec(‘python blockchain/compile_and_deploy_smartcontract.py’);
       // exec(‘python create_new_user.py admin123’);
       // exec(‘python creer_tokens.py 100’);
       // exec(‘python create_new_user.py option1’);
       // exec(‘python create_new_user.py option2’);
       // exec(‘python create_new_user.py option3’); 
       // exec(‘python create_new_user.py alberto’);
       
      

$sql="INSERT INTO vote(e_id,user_id,option) VALUES('$e_id','$user_id','$option')";

 $result = mysqli_query($db,$sql);
    if($result){

      // echo "<script> alert('La tenue a été ajoutée avec succès'); </script>";
   //    echo mysqli_error($db);

      
      echo "<script>window.open('single_election.php?e_id=$e_id','_self')</script>";
    }else{
      die(mysqli_error($db));
    }

     }


?>