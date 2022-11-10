<?php

require_once("./Php/config.php");
$connection = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nombase, $user, $mdp );
		$requete = 'SELECT * FROM region';
		$resultat = $connection ->query($requete);
		$tabRegion = $resultat -> fetchAll();
		$resultat -> closeCursor();

		$requete = 'SELECT * FROM plat';
		$resultat = $connection ->query($requete);
		$tabPlat = $resultat -> fetchAll();
		$resultat -> closeCursor();


		$requete = 'SELECT * FROM animation';
		$resultat = $connection ->query($requete);
		$tabAnimation = $resultat -> fetchAll();
		$resultat -> closeCursor();

		//Création d'une session
		


?>



<!DOCTYPE html> 
<html lang="fr">

	<head>
		<?php require_once("Php/meta.php");?>
		<link rel="stylesheet" href="./CSS/admin.css">
		<title>The European Meals Tour - Admin</title>
		<meta property="og:title" content="The European Meals Tour - Admin" />
	</head>
	<body>
		<?php
        require_once("./Php/header.php");


			// Protection pour que personne ne puisse accèder a la page s'il n'est pas passé par le formulaire de la page connexion.php
			if (isset($_SESSION["mdp"])){
				
			?>

					<h2>Vous pouvez modifier certaines informations présente sur le site.</h2>
					<h3>Cliquez sur les éléments que vous souhaiter changer.</h3>

					<fieldset>
            		<legend><h3>Plats</h3></legend>

					<?php
// Création d'une boucle qui va afficher automatiquement tous les plats en fonctions des régions
// Les plats seront des liens vers une page via leur id pour les modifier 
					// print_r($tabRegion);
					// print_r($tabPlat);
					for ($i = 0; $i<count($tabRegion); $i++){
						?>
							<h4><?php echo $tabRegion[$i]["nom_region"]; ?></h4>


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
				<br>
				<br>
				<fieldset>
            		<legend><h3>Animations</h3></legend>

					<?php
// Même chose pour la table animation

						for ($j=0; $j<count($tabAnimation); $j++){
								// var_dump($tabPlat);
								?>
								
								<a href='modif_animation.php?id=<?php echo $tabAnimation[$j]["id_animation"]; ?>'><?php echo$tabAnimation[$j]["nom_animation"].'<br>';?></a>
								<br>
								<?php
							
						}
						?>
				</fieldset>
				<fieldset>
            		<legend><h3>Création</h3></legend>

				
					<a href="ajouter.php?type=animation">Ajouter une animation</a><br>
					<a href="ajouter.php?type=plat">Ajouter un plat</a>
						


				</fieldset>
				<br>
					<?php
					
					require_once("./Php/footer.php");
					}


					
				
				
				else{
					header('Location: connexion.php');
					exit();
				}
			
		
		



?>




        
    </body>

</html>