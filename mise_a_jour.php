<?php
	include('conn.php');
    $id=$_GET['id'];
 
	
		$Nom = $_POST['Nom'];
		$Prenom = $_POST['Prenom'];
		$Age = $_POST['Age'];
		$Genre = $_POST['Genre'];
		$Classe = $_POST['Classe'];
		$Mathematique = $_POST['Mathematique'];
		$Physique = $_POST['Physique'];
		$SVT = $_POST['SVT'];
		$Histoire_Geo = $_POST['Histoire_Geo'];
		$Anglais = $_POST['Anglais'];
		$Francais = $_POST['Francais'];
		$EPS = $_POST['EPS'];
 
		mysqli_query($conn, "UPDATE `eleve` set Nom='$Nom', Prenom='$Prenom', Age='$Age', Genre='$Genre', Classe='$Classe', Mathematique='$Mathematique', Physique='$Physique', SVT='$SVT', Histoire_Geo='$Histoire_Geo', Anglais='$Anglais', Francais='$Francais', EPS='$EPS' where eleve_id='$id'" ) or die;
		header("location: index.php");
	
?>