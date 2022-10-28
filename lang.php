<?php
session_start();
// gestion du changement de langue
if(isset($_GET["lang"])){
	$_SESSION["lang"]=$_GET["lang"];
}
if(!isset($_SESSION["lang"])){
	$_SESSION["lang"]='fr'; // par défaut
}
$lang = $_SESSION["lang"];


switch($lang) {
    //Si lang=fr on inclut le fichier de langue française
    case 'fr':
        include('./lang/lang-fr.php');
    break;
    //Si lang=en on inclut le fichier de langue anglaise
    case 'en':
        include('./lang/lang-en.php');
    break;
}
?>