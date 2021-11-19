<?php
//--------- BDD
$bdd = "agezat";
$bdHost = "kartxila.iutbayonne.univ-pau.fr";
$bdUser = "agezat";
$bdMdp = "agezat";

$lienBDD = new mysqli($bdHost, $bdUser,$bdMdp,$bdd);

// Vérif connection au serveur
if ($lienBDD->connect_error) 
{
   die("Connection échouée " . $lienBDD->connect_error);
}

//--------- SESSION
session_start();
define("RACINE_SITE","/Projet/");
require_once("fonction.inc.php");
 ?>