<?php include 'admin/db.php';
  session_start();
 ?>
<?php

if(isset($_POST['inscription'])){

$passwordErr = "";
$password_valid = false; 	

function id_generate(){
      global $db;
      $generated_id = rand(1000,999999);
      $user_id = "U".$generated_id;
      $query = mysqli_query($db,"SELECT * from users where user_id = '$user_id'");
      if(mysqli_num_rows($query)>0){
          id_generate();
      }
      else{
          return $generated_id;
      } 
    }
 
    $nas= mysqli_real_escape_string($db,trim($_POST['nas']));
    $password= mysqli_real_escape_string($db,trim($_POST['password']));
    $password1= mysqli_real_escape_string($db,trim($_POST['password1']));
    $code= mysqli_real_escape_string($db,trim($_POST['code']));
    $user_id= "U".id_generate();


		    if(strlen($password)  >= 8){

		        if($password == $password1){
		        $password_valid= true;
		        // $pass= base64_encode($password);
		          }
		     else{
		    $passwordErr .="Les deux mots de passe ne se ressemblent pas";
		    } }
		else
		{
		  $passwordErr .="Le mot de passe doit avoir au mois 8 lettres ou chiffres";
		}

  if($password_valid){

$sql= "INSERT INTO users(NAS,password,user_id,code) VALUES('$nas','$password','$user_id','$code')";
$run=mysqli_query($db,$sql);

if($run){
	echo "<script>window.open('login.php','_self')</script>";
}

else{
	echo "<script>window.open('signup.php','_self')</script>";
}

  }

}
 ?>


<?Php 

if(isset($_POST['connexion'])){

  $nas=$_POST['nas'];
  $password=$_POST['password'];
  //$pass= base64_encode($password);

  $query = "SELECT * from users where NAS = '$nas' and password = '$password' ";
  $result= mysqli_query($db,$query);

  if($result){

    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result)==1){
      extract($row);
      $_SESSION['is_UserLogin']=true;
      $_SESSION['id']=$id;
      echo "<script>window.open('index.php','_self') </script> ";
      
      }
      else{
        echo "<script>alert('Les coordonnées ne sont pas valides')</script>";
        echo "<script>window.open('login.php','_self') </script> ";
      }
      
    }
    else{
      echo "<script>alert('Les coordonnées ne sont pas valides')</script>";
    }
  }


?>

