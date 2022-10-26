<?php

		$connection = new PDO('mysql:host=localhost;port=3306;dbname=webweek','root','');
		$requete = 'SELECT * FROM region';
		$resultat = $connection ->query($requete);
		$tabRegion = $resultat -> fetchAll();
		$resultat -> closeCursor();

		$requete = 'SELECT * FROM plat';
		$resultat = $connection ->query($requete);
		$tabPlat = $resultat -> fetchAll();
		$resultat -> closeCursor();


?>



<!DOCTYPE html> 
<html lang="fr">

	<head>
	  	<link rel="stylesheet" type="text/css" href="CSS/Global.css">
	  	<link rel="stylesheet" type="text/css" href="CSS/connexion.css">
	  	<meta http-equiv="content-type" content="text/html"; charset="UTF-8"/>
		<link rel="icon" type="image/x-icon" href="">

	  	<meta name="description" content=""/>
		<title>The european meals tour</title>
		</head>
	<body>
		<?php
      		require_once("./Php/header.php")
    	?>
		<?php

			// Protection pour que personne ne puisse accèder a la page s'il n'est pas passé par le formulaire de la page connexion.php
			if (isset($_POST["id"])){
				$nom_admin = $_POST["id"];
				$mdp = $_POST["mdp"];
				// Vérification du mdp et du nom du compte
				if ($mdp == " " && $nom_admin==" "){
					?>

					<p>Vous pouvez modifier certaines informations présente sur le site</p>

					<fieldset>
            		<legend>Plat</legend>

					<?php
// Création d'une boucle qui va afficher automatiquement tous les plats en fonctions des régions
// Les plats seront des liens vers une page via leur id pour les modifier 
					// print_r($tabRegion);
					// print_r($tabPlat);
					for ($i = 0; $i<count($tabRegion); $i++){
						?>
							<h4><?php echo $tabRegion[$i]["nom_region"]; ?> </h4>


						<?php
						for ($j=0; $j<count($tabPlat); $j++){
							if ($tabRegion[$i]["id_region"]== $tabPlat[$j]["id_region"]){
								// var_dump($tabPlat);
								?>
								
								<a href='modif_plat.php?id=<?php echo $tabPlat[$j]["id_plat"]; ?>'><?php echo$tabPlat[$j]["nom_plat"];?></a>
								<br>
								<?php
							}
						}
					}


					?>






				</fieldset>

					<?php
				}

				else{
					header('Location: connexion.php');
					exit();
				}
			}



?>




	<?php
      require_once("./Php/footer.php")
    ?>     
    </body>

</html>