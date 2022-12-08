<?php
include("phpconnectio.php");
$id= $_GET['id'];
$query = "DELETE FROM phpproject WHERE id='$id'";
$data = mysqli_query($conn,$query);
if($data)
{
	echo "<script>alert('are you sure you want to delete for this record?')</script>";
	?>

  <meta http-equiv = "refresh" content = "0; url = http://localhost/project/form3.php" />
  <?php
}
else
{
	echo "failed";
}
?>