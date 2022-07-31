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
     <br>
      <span style="color: black; font-weight: 600">Date du début:</span> <?php echo $row['start']; ?>
      <br>
       <span style="color: black; font-weight: 600">Date de fin:</span> <?php echo $row['fin']; ?>

      <br>
      <?php echo $row['description']; ?></p>
    
  </div>
  <br>

  <button type="button" class="btn btn-primary" onclick="detailsmodal(<?php echo $row['id'] ?>)">Voir les resultats</button>

  
  

</section><br>

<?php include 'footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    function detailsmodal(id){
  
  
  var data={"id" : id}
  jQuery.ajax({
    url:"/MGL850/admin/see_election.php",
    method: "post",
    data:data,
    success: function(data){
      
      jQuery('body').append(data);
      jQuery('#details-modal').modal('toggle');

  },
  error:function(){
    
    alert("something is wrong!");}

  }); 
}
  
   </script>
  </body>
</html>