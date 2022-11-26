<?php
	require_once 'conn.php';
 
	if(ISSET($_POST['save'])){
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
 
		mysqli_query($conn, "INSERT INTO `eleve` VALUES('', '$Nom', '$Prenom', '$Age', '$Genre', '$Classe', '$Mathematique', '$Physique', '$SVT', '$Histoire_Geo', '$Anglais', '$Francais', '$EPS')") or die;
		header("location: index.php");
	}
?>