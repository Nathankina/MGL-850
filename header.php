<?php include 'admin/db.php'; ?>
<?php
  if(isset($_SESSION['is_UserLogin'])){
  $id= $_SESSION['id'];
 
    $SelectUser = mysqli_query($db,"SELECT * from users where id = '$id'");
    $UserData = mysqli_fetch_array($SelectUser);
  }
  else{
   // echo "<script>window.open('login.php','_self');</script>";
  }
?>
<header >

<nav class="navbar navbar-expand-lg" style="background-color: #222">
  <div class="container">
    <a class="navbar-brand" href="#" style="color: white; font-weight: 700; font-size: 28px">ON<span style="color: #199DF9">VOTE</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px; margin-left: 280px">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: white">Accueil</a>
        </li>
        <li class="nav-item dropdown" style="color: white">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
            Élections
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
            <li><a class="dropdown-item" href="election.php" style="font-size: 14px">Élections en cours</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="election.php" style="font-size: 14px">Élections à venir</a></li>
            
          </ul>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white">Contactez-Nous</a>
        </li>
      </ul>

      <ul style="margin-bottom: 0">
        <?php if(!isset($_SESSION['is_UserLogin'])){ ?>

        <li class="nav-item">
          <a class="nav-link" href="login.php" style="color: white;">Se connecter</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="signup.php" style="color: white">S'inscrire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white">FAQs</a>
        </li>
         <?php }else{ ?>

          <li class="nav-item">
          <a class="nav-link" href="#" style="color: white; font-weight: 600">User ID: <?php echo $UserData['user_id']; ?></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: white; font-size: 14px">Se deconnecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white; font-size: 14px">FAQs</a>
        </li>
      <?php } ?>
            
</ul>
      </div></div>
</nav>
</header>