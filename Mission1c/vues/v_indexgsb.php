<html>
	<head>
		<meta charset="UTF-8"/>
		<link href="gsbstyle.css" rel="stylesheet" type="text/css" />
		<title>gsb</title>
	</head>
	<h1><img src="logo.jpg";>Suivi des cumuls de tous les frais par mois</h1> 
	<body>

	<fieldset id="periode">
		<h2>Période</h2>
	
	<form action="v_gsb.php" method="POST">
 <!--  --------------------------------------------------------------- -->
<?php

// Liste déroulante //
$req = "SELECT DISTINCT mois FROM fichefrais"; 
// $res = mysql_query($connexion , $req);
// $req = mysqli_fetch_all($res, MYSQLI_ASSOC);

?>
	<label id = "AnneeMois">
		Année / Mois : 
			<select name = "mois">
						<?php 
						foreach ($req as $mois) {?>       
				
				<option value="<?php echo $mois['mois'];?>">
						<?php echo $mois['mois'];}?>
				</option> 
			</select>
			<button type="submit">Valider</button>

	</label>

 <!--  --------------------------------------------------------------- -->
		<p>Cumul pour tous les visiteurs des Frais au forfait par poste : </p>
		<table border="1" width="40%">
			<tr>
				<th>Repas midi</th><th>Nuitée</th><th>Etape</th><th>Km</th>
				
			</tr>
		</table>
	</fieldset>
	
	</form>



	</body>
</html>

