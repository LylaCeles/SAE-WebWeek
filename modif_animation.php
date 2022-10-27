


<!DOCTYPE html> 
<html lang="fr">

	<head>
	<?php require_once("./Php/meta.php");?>
		<title>The european meals tour</title>
		</head>
	<body>
		<?php
        require_once("./Php/header.php");

			// Protection pour que personne ne puisse accèder a la page s'il n'est pas passé par le formulaire de la page connexion.php
			if (isset($_GET["id"])){
				$id_anim = $_GET["id"];
                require_once("Php/fonction.php");
                
                

        ?>

					<fieldset>

					<?php
							affichage($id_anim, $listeAnim,$listePerso);
							?>
							</fieldset>

							<fieldset>
								<legend>Modifications</legend>
                        <form action="" method="POST">
								<select name="selectPerso">
									<!-- Le select aura la valeur de l'id de la personne -->
                           		<?php supression($id_anim,$listePerso );?>					
								
								<select>
								<input type='submit' name='envoie' value="Supprimer l'inscription">
							</form>
						
			</fieldset>
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