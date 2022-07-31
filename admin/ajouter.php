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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MGL850</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <link href="asset/css/all.css" rel="stylesheet">
     <link href="asset/css/style.css" rel="stylesheet">


    <style type="text/css">
      .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
    </style>
  </head>
  <body>
  
<?php include 'header.php'; ?>
<section class="vh-100">
  <div class="container h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-4 col-lg-4 col-xl-4">
        <img src="images/3.jpg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-8 col-xl-7 offset-xl-1">
     <form method="POST" action="backend.php">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p  style="font-size: 18px; color: black; font-weight: 600; text-align: center;">Ajouter une élection</p>

          </div>

          <div class="divider d-flex align-items-center my-4">
            
          </div>
          <div class="row">

            <div class="form-outline mb-4 col-md-6" style="display: none;">
            <label class="form-label" for="form3Example3">m_id</label>
            <input type="text" id="form3Example3" class="form-control" name="m_id" 
              placeholder="Entrez le sujet de l'élection" value="<?php echo $UserData['m_id']; ?>" />
            
          </div>

                    <div class="form-outline mb-4 col-md-6">
            <label class="form-label" for="form3Example3">Nom</label>
            <input type="text" id="form3Example3" class="form-control" name="name" 
              placeholder="Entrez le sujet de l'élection" required="" />
            
          </div>
          <div class="form-outline mb-3 col-md-6">
            <label class="form-label" for="form3Example4">Date du début</label>

            <input type="date" id="form3Example4" class="form-control" name="start" required="" />
            </div>

            <div class="form-outline mb-3 col-md-6">
            <label class="form-label" for="form3Example4">Date du fin</label>

            <input type="date" id="form3Example4" class="form-control " name="fin" required="" />
            </div>

            <div class="form-outline mb-3 col-md-6">
            <label class="form-label" for="form3Example4">Image</label>

            <input type="file" id="form3Example4" name="image" class="form-control"
             />
            </div>

              <div class="form-outline mb-3 col-md-12">
            <label class="form-label" for="form3Example4">Description</label>
            <textarea class="form-control" rows="5" required="" name="description"></textarea>
           
            </div>


          </div>
          <input type="submit" name="ajouter" class="btn btn-primary" value="Ajouter ">

        </form>


      </div>
    </div>
  </div>
  
</section>

<?php include 'footer.php'; ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>