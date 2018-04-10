<html>
<head>
    <link href="vues/gsbstyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="connexion">
	<h1><img src="vues/logo.jpg";>Connexion d'utilisateur</h1>



	<fieldset >
		<form method="POST" action="index.php?uc=connexion&action=traitement">
		<!-- <form method="POST" action="../mission1c/util/class.pdoGSB.inc.php"> -->
			<p>
			   <label for="pseudo">Utilisateur :</label>
			   <input type="text" name="login" id="pseudo" required="" /><br><br />
			   <label for="pass">Mot de passe :</label>
			   <input type="password" name="mdp" id="pass" required=""> <br><br />
			   
			   <input type="submit" value="Se connecter" />
			   <input type="reset" value="Annuler" />
 			</p>
		</form>
	</fieldset>
	
	</div>
</body>
</html>

