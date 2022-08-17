<?php   
include 'admin/db.php';

$id =$_POST['id'];
$id=(int)$id;

$a = "SELECT * from chants where id='$id'";
$a1 = mysqli_query($db,$a);
$row = mysqli_fetch_assoc($a1);
extract($row);

//echo "<script>alert($id); </script>";
//$dept_id = $_SESSION['dept_id'];
//$dept_name = $_SESSION['dept_name'];
?>


<!DOCTYPE html>
<html>
<head>
  
</head>
<body>

<div class="modal fade details-1" id="details" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header text-center" style="background-color: #054ba0">
        <h4 class="modal-title w-100" id="exampleModalLabel" style="color:#fff"><?php echo $row['titre']; ?></h4>
        <button type="button" class="close" onclick="closemodal()" aria-label="Close">
          <span aria-hidden="true" style="color: #fff">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><pre>
			<?php echo $row['parole']; ?>
		</pre>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn moi" onclick="closemodal()">Fermer</button>
  
      </div>
    </div>
  </div>
</div>
<script>
function closemodal(){
  
  jQuery('#details').modal('hide');
  setTimeout(function(){
    
    jQuery('#details-modal').remove();
    jQuery('.modal-backdrop').remove();
    },200)
  
}

</script>

</body></html>