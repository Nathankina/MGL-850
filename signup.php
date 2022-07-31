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
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-4 col-lg-4 col-xl-5">
        <img src="images/3.jpg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4 offset-xl-1">
        
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3" style="font-size: 18px; color: black">S'inscrire avec</p>
            <button type="button" class="btn btn-primary btn-floating mx-1 btn-sm">
              <i class="fab fa-facebook"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1 btn-sm">
              <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1 btn-sm">
              <i class="fab fa-microsoft"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Ou</p>
          </div>
          <form method="POST" action="backend.php">
          <!-- Email input -->

          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Numero d'assurance social</label>
            <input type="text"  name="nas" class=" form-control"
              placeholder="Entrez une adresse valide" required="" />
            
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Code postal</label>
            <input type="text"  name="code" class=" form-control"
              placeholder="Entrez votre code postal" required="" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Mot de passe</label>

            <input type="password" class=" form-control"
              placeholder="Enter password" name="password" />
            </div>

                      <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Confirmer le mot de passe</label>

            <input type="password" name="password1" class=" form-control"
              placeholder="Enter password" />
            </div>
        
        <input type="submit" name="inscription" class="btn btn-primary" value="S'inscrire">

          <div class="text-center text-lg-start">
          
            <p class="small fw-bold mt-2 pt-1 mb-0">Avez-vous déjà un compte?<a href="login.php"
                class="link-primary"> Se connecter</a></p>
          </div>

      </form>

      </div>
    </div>
  </div>
  
</section>
<?php include 'footer.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>