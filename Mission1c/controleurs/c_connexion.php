<?php
function connecter($id,$nom,$prenom){
	$_SESSION['idVisiteur']= $id; 
	$_SESSION['nom']= $nom;
	$_SESSION['prenom']= $prenom;
}

function ajouterErreur($msg){
   if (! isset($_REQUEST['erreurs'])){
      $_REQUEST['erreurs']=array();
	} 
   $_REQUEST['erreurs'][]=$msg;
}

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'connexion';
}
// var_dump($_REQUEST);
$action = $_REQUEST['action'];
switch($action){
	case 'connexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'traitement':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		// echo $login;
		$visiteur = $pdo->getInfosVisiteur($login,$mdp); 
		if(!is_array($visiteur))
                {
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			
		}
		if(($login == true) & ($mdp == true))
		{
			include 'vues/v_indexgsb.php';
		}
	}

}
?>