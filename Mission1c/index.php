<!DOCTYPE html>
<html>
<head>
	<link href="gsbstyle.css" rel="stylesheet" type="text/css" />
</head>
</html>
<?php
function estConnecte(){
    return (isset($_SESSION['idVisiteur'])) || (isset($_SESSION['nom']));
}

require_once("util/class.pdoGSB.inc.php");
session_start();

$pdo = Pdogsb::getPdogsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];			
switch($uc)
{
	case 'connexion':{
		include("controleurs/c_connexion.php");
                break;
	}
        case 'fichefrais' :{
		include("controleurs/v_gsb.php");
                break; 
                }	
}
	
?>



