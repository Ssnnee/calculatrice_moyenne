<?php
    include('conn.php');

    $id=$_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM `eleve` where eleve_id='$id'") or die;
	$fetch = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="shortcut icon" href="img/logo.svg"/>
    <title>Document</title>
</head>
<body style="background: url(./img/img.jpg)  ;">
	<!-- <div style="position:absolute; right:0; bottom:0; " >
		<img src="./img/img.jpg" alt="illustration">
	</div> -->
	<!-- <section style="position: absolute; width: 650px; height: 130px; background: #fff5de; right: 100px; bottom: 30px; z-index: -2;" ></section>
    <section style="position: absolute; width: 440px; height: 430px; background: #def6ff; right: 0px; bottom: 70px; z-index: -1;"></section> -->

    <form method="POST" action="mise_a_jour.php?id=<?php echo $fetch['eleve_id']; ?>">
		<div class="modal-header" style="background-color: #f8f8f8;">
			<h3 class="modal-title" style="font-weight: bolder; display: flex; align-items: center; gap:40px;"> <a href="index.php"><img src="img/logo.svg" alt="logo" style="width: 30px;"></a>  Modifications des informations de l'élève <?php echo $fetch['Nom']. " " .$fetch['Prenom'] ; ?></h3>
		</div>
		<div class="modal-body">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="form-group" style="display: flex; gap: 94px; align-items:center;">
					<label>Nom</label>
					<input type="text" class="form-control" name="Nom" required="required"/>
				</div>
				<div class="form-group" style="display: flex; gap: 72px; align-items:center;" >
					<label>Prénom</label>
					<input type="text" class="form-control" name="Prenom" required="required"/>
				</div>
				<div class="form-group" style="display: flex; gap: 99px; align-items:center;">
					<label>Age</label>
					<input type="text" class="form-control" name="Age" required="required"/>
				</div>
				<div class="form-group" style="display: flex; gap: 85px; align-items:center;">
					<label>Genre</label>
					<input type="text" class="form-control" name="Genre" required="required"/>
				</div>
				<div class="form-group" style="display: flex; gap: 81px; align-items:center;">
					<label>Classe</label>
					<input type="text" class="form-control" name="Classe" required="required"/>
				</div>
				<div class="form-group" style="display: flex; gap: 32.5px; align-items:center;">
					<label>Mathématique</label>
					<input type="number" min="0" max="20" class="form-control text-right" name="Mathematique" required="required"/>
				</div>
				<div class="form-group" style="display: flex; gap: 65px; align-items:center;">
					<label>Physique</label>
					<input type="number" min="0" max="20" class="form-control text-right" name="Physique" required="required"/>
				</div>
				<div class="form-group" style="display: flex; gap: 100px; align-items:center;">
					<label>SVT</label>
					<input type="number" min="0" max="20" class="form-control text-right" name="SVT" required="required"/>
				</div>
				<div class="form-group" style="display: flex; gap: 15px; align-items:center;">
					<label>Histoire Géographie</label>
					<input type="number" min="0" max="20" class="form-control text-right" name="Histoire_Geo" required="required"/>
				</div>
				<div class="form-group" style="display: flex; gap: 76px; align-items:center;">
					<label>Anglais</label>
					<input type="number" min="0" max="20" class="form-control text-right" name="Anglais" required="required"/>
				</div>
				<div class="form-group" style="display: flex; gap: 70px; align-items:center;">
					<label>Français</label>
					<input type="number" min="0" max="20" class="form-control text-right" name="Francais" required="required"/>
				</div>
				<div class="form-group" style="display: flex; gap: 99px; align-items:center;">
					<label>EPS</label>
					<input type="number" min="0" max="20" class="form-control text-right" name="EPS" required="required"/>
				</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer" style="background-color: #f8f8f8; text-align:center;">
					<a class="btn btn-danger" href="index.php"><span class="glyphicon glyphicon-remove"></span> Fermer</a>
					<button class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> Sauvegarder</button>
		</div>
	</form>
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	


</body>
</html>
