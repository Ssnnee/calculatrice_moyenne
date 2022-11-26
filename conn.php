<?php
	$conn = mysqli_connect("localhost", "root", "", "db_calcul_moyenne");
 
	if(!$conn){
		die("Erreur: Impossile de se connecter à la base de donnée!");
	}
?>