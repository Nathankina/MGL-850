<?php include 'db.php';
  session_start();
 ?>
<?php

if(isset($_POST['inscription'])){

$passwordErr = "";
$password_valid = false; 	

function id_generate(){
      global $db;
      $generated_id = rand(1000,999999);
      $m_id = "M".$generated_id;
      $query = mysqli_query($db,"SELECT * from municipalite where m_id = '$m_id'");
      if(mysqli_num_rows($query)>0){
          id_generate();
      }
      else{
          return $generated_id;
      } 
    }
 
    $ville= mysqli_real_escape_string($db,trim($_POST['ville']));
    $password= mysqli_real_escape_string($db,trim($_POST['password']));
    $password1= mysqli_real_escape_string($db,trim($_POST['password1']));
     $m_id= "M".id_generate();


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

$sql= "INSERT INTO municipalite(m_id,name,password) VALUES('$m_id','$ville','$password')";
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

	$ville=$_POST['ville'];
	$password=$_POST['password'];
	//$pass= base64_encode($password);

	$query = "SELECT * from municipalite where name = '$ville' and password = '$password' ";
	$result= mysqli_query($db,$query);

	if($result){

		$row = mysqli_fetch_array($result);
		if(mysqli_num_rows($result)==1){
			extract($row);
			$_SESSION['is_VilleLogin']=true;
            $_SESSION['id']=$id;
			echo "<script>window.open('index.php','_self') </script> ";
			
			}
			
		}
		else{
			echo "<script>alert('Les coordonnées ne sont pas valides')</script>";
		}
	}


?>


<?php

if(isset($_POST['ajouter'])){

function id_generate(){
      global $db;
      $generated_id = rand(1000,999999);
      $e_id = "E".$generated_id;
      $query = mysqli_query($db,"SELECT * from election where e_id = '$e_id'");
      if(mysqli_num_rows($query)>0){
          id_generate();
      }
      else{
          return $generated_id;
      } 
    }
 
    $name= mysqli_real_escape_string($db,trim($_POST['name']));
    $start= mysqli_real_escape_string($db,trim($_POST['start']));
    $fin= mysqli_real_escape_string($db,trim($_POST['fin']));
    $description= mysqli_real_escape_string($db,trim($_POST['description']));
    $m_id= mysqli_real_escape_string($db,trim($_POST['m_id']));

    $status= 1;
    $e_id= "E".id_generate();


		    

$sql= "INSERT INTO election(e_id,name,start,fin,description,status,m_id) VALUES('$e_id','$name','$start','$fin','$description','$status','$m_id')";
$run=mysqli_query($db,$sql);

if($run){
	echo "<script>window.open('index.php','_self')</script>";
}

else{
	echo "<script>window.open('ajouter.php','_self')</script>";
}

  

}
 ?>

