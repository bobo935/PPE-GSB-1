<!DOCTYPE html>
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
        
<?php

// Liste déroulante //
$req = "SELECT DISTINCT mois * FROM fichefrais"; 
// $res = mysqli_query($connexion , $req);
// $lesLignes = mysqli_fetch_all($res, MYSQLI_ASSOC);
// $result = mysql_query($req);
//requetes pour tableau


// $visiteur = $_GET['visiteur'];
$fichefrais = isset($_POST['fichefrais']) ? $_POST['fichefrais'] : NULL;
if($fichefrais != NULL){
$req2 = "SELECT mois, SUM(montant*quantite) as MontantTotal  
FROM fraisforfait INNER JOIN lignefraisforfait ON id = idFraisForfait where id = '' and mois = '' ";

// $res2 = mysql_query($connexion, $req2);
// $lesLignes2 = mysqli_fetch_all($res2, MYSQLI_ASSOC);
}
?>
	<label for = "AnneeMois">
		Année / Mois : 
			<select name = "mois">
						<?php 
						foreach ($req as $mois) {?>       
				
				<option value="<?php echo $mois['mois'];?>">
						<?php echo $mois['mois'];}?>
				</option> 
			</select>
        <button type="submit">Valider</button>

	
			<p>Cumul pour tous les visiteurs des Frais au forfait par poste : </p>
			<p><?php if($fichefrais != NULL){?> <?php echo $req2; }?></p>
		<table border="1" width="40%">
			<tr>
				<th>Repas midi</th><th>Nuitée</th><th>Etape</th><th>Km</th>
				<?php if($fichefrais != NULL){ foreach ($lesLignes2 as $ligne2) {?>
				<td><?php echo $ligne2['MontantTotal'] ; ?></td> <?php }} ?></td>
			</tr>
		</table>
	</fieldset>
    </form>
</body>
</html>