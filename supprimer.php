<?php
	include('conn.php');
    $id=$_GET['id'];
 
	mysqli_query($conn, "DELETE FROM `eleve`  where eleve_id='$id'" ) or die;
	header("location: index.php");
	
?>


