<?php
class Pdogsb{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=gsb';   		
      	private static $user='root' ;    		
      	private static $mdp='root' ;	
		private static $monPdo;
		private static $monPdogsb=null;

/* Constructeur privé, crée l'instance de PDO qui sera sollicitée pour toutes les méthodes de la classe */				
	private function __construct(){
    	Pdogsb::$monPdo = new PDO(Pdogsb::$serveur.';'.Pdogsb::$bdd, Pdogsb::$user, Pdogsb::$mdp); 
		Pdogsb::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		Pdogsb::$monPdo = null;
	}	
	
	
	public  static function getPdogsb(){
		if(Pdogsb::$monPdogsb==null){
			Pdogsb::$monPdogsb= new Pdogsb();
		}
		return Pdogsb::$monPdogsb;  
	}

	public function getInfosVisiteur($login, $mdp){
		$req = "SELECT login, mdp FROM visiteur";
// echo $req;echo $login;
// die();
		$stmt=Pdogsb::$monPdo->prepare($req);		
		// $login = $_REQUEST['login'];
		$login = isset($_POST['login']);
		// $mdp = $_REQUEST['mdp'];
		$mdp = isset($_POST['mdp']);
		$stmt->bindParam(':login',$login);
		$stmt->bindParam(':mdp',$mdp);
		$stmt->execute();
		$ligne= $stmt->fetch();
		$rs = Pdogsb::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}
	
	function getMois()
	{
	$connexion = connexion();
	if ($connexion)
		{
	$req = "SELECT DISTINCT mois FROM fichefrais";
	
	$result = mysqli_query($connexion, $req);
	if (!$result)		
		{	
			$message='Requête invalide';
			die($message);
		}
		$mois=mysqli_fetch_all($result);
		return $mois;
	  }
	}  
}
?>
