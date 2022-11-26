<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="shortcut icon" href="img/logo.svg"/>
	
    <title>Programme PH</title>
</head>
<body >
    <nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">  <span style="display: flex; align-items: center; gap:7px; color:#b6eafe; "> <img src="img/logo.svg" alt="logo" style="width: 30px;"> <span style="color: black;" >Programme</span> PHP</span> </a>
		</div>
	</nav>
	<div style="position:absolute; right:0; bottom:0; " >
		<img src="./img/header_illustration.svg" alt="illustration">
	</div>
    <section style="position: absolute; width: 650px; height: 130px; background: #fff5de; right: 100px; bottom: 30px; z-index: -2;" ></section>
    <section style="position: absolute; width: 440px; height: 430px; background: #def6ff; right: 0px; bottom: 70px; z-index: -1;"></section>

	<!-- Centrer la div -->
	<div class="col-md-2" style="width: 8.66666667%;"></div>
	<div class="col-md-10 well"  style="background:none; border-radius: 10px;" >
		<h3 class="text-primary"> Calculatrice à moyenne</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Ajouter un élève</button>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Age</th>
					<th>Genre</th>
					<th>Classe</th>
					<th>Math</th>
					<th>Physique</th>
					<th>SVT</th>
					<th>Hist-Géo</th>
					<th>Anglais</th>
					<th>Français</th>
					<th>EPS</th>
					<th>Moyenne</th>
					<th style="text-align:center">Statut</th>
					<th style="text-align:center">Actions</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
					require 'conn.php';
 
					$query = mysqli_query($conn, "SELECT * FROM `eleve`") or die;
					while($fetch = mysqli_fetch_array($query)){
 
					$resultat = ($fetch['Mathematique']*4 + $fetch['Physique']*3 + $fetch['SVT']*3 + $fetch['Histoire_Geo']*2 + $fetch['Anglais']*2 + $fetch['Francais']*2 + $fetch['EPS']*2) / 18;
				?>
				<tr style="text-align: center;">
					<td><?php echo $fetch['Nom']?></td>
					<td><?php echo $fetch['Prenom']?></td>
					<td><?php echo $fetch['Age']?></td>
					<td><?php echo $fetch['Genre']?></td>
					<td><?php echo $fetch['Classe']?></td>
					<td><?php echo $fetch['Mathematique']?></td>
					<td><?php echo $fetch['Physique']?></td>
					<td><?php echo $fetch['SVT']?></td>
					<td><?php echo $fetch['Histoire_Geo']?></td>
					<td><?php echo $fetch['Anglais']?></td>
					<td><?php echo $fetch['Francais']?></td>
					<td><?php echo $fetch['EPS']?></td>
					<td><?php echo filter_var($resultat, FILTER_VALIDATE_INT) == false ? number_format($resultat,2) : number_format($resultat) ?></td>
					<?php
						if($resultat >= 10){
							echo "<td  > <span style='background-color:green; color:#fff; cursor:auto;' class='btn btn-sm'>Admis(e)</span> </td>";
						}else if($resultat < 10){
							echo "<td  > <span style='background-color:red; color:#fff; cursor:auto;' class='btn btn-sm'>Echoué(e)</span> </td>";
						}
					?>
					<td style="display: flex; gap: 10px;">
						<a class="btn btn-primary btn-sm" href="modifier.php?id=<?php echo $fetch['eleve_id']; ?>">  Modifier </a>
						<a class="btn btn-danger btn-sm" href="supprimer.php?id=<?php echo $fetch['eleve_id']; ?>">  Supprimer</a>
					</td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="sauvegarde_eleve.php">
				<div class="modal-header">
					<h3 class="modal-title">Ajouter un élève</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Nom</label>
							<input type="text" class="form-control" name="Nom" required="required"/>
						</div>
						<div class="form-group">
							<label>Prénom</label>
							<input type="text" class="form-control" name="Prenom" required="required"/>
						</div>
						<div class="form-group">
							<label>Age</label>
							<input type="text" class="form-control" name="Age" required="required"/>
						</div>
						<div class="form-group">
							<label>Genre</label>
							<input type="text" class="form-control" name="Genre" required="required"/>
						</div>
						<div class="form-group">
							<label>Classe</label>
							<input type="text" class="form-control" name="Classe" required="required"/>
						</div>
						<div class="form-group">
							<label>Mathématique</label>
							<input type="number" min="0" max="20" class="form-control text-right" name="Mathematique" required="required"/>
						</div>
						<div class="form-group">
							<label>Physique</label>
							<input type="number" min="0" max="20" class="form-control text-right" name="Physique" required="required"/>
						</div>
						<div class="form-group">
							<label>SVT</label>
							<input type="number" min="0" max="20" class="form-control text-right" name="SVT" required="required"/>
						</div>
						<div class="form-group">
							<label>Histoire Géographie</label>
							<input type="number" min="0" max="20" class="form-control text-right" name="Histoire_Geo" required="required"/>
						</div>
						<div class="form-group">
							<label>Anglais</label>
							<input type="number" min="0" max="20" class="form-control text-right" name="Anglais" required="required"/>
						</div>
						<div class="form-group">
							<label>Français</label>
							<input type="number" min="0" max="20" class="form-control text-right" name="Francais" required="required"/>
						</div>
						<div class="form-group">
							<label>EPS</label>
							<input type="number" min="0" max="20" class="form-control text-right" name="EPS" required="required"/>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
					<button class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> Sauvegarder</button>
				</div>
			</form>
		</div>
	</div>
</div>	
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	

</body>
</html>
