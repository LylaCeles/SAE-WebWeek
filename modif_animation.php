


<!DOCTYPE html> 
<html lang="fr">

	<head>
		<?php require_once("./Php/meta.php");?>
		<title>The European Meals Tour - Modification des animations</title>
		<meta property="og:title" content="The European Meals Tour - Modification des animations" />
		<link rel="stylesheet" href="./CSS/modif_animation.css">
	</head>
	<body>
		<?php
        require_once("./Php/header.php");

			// Protection pour que personne ne puisse accèder a la page s'il n'est pas passé par le formulaire de la page connexion.php
			if (isset($_GET["id"])){
				$id_anim = $_GET["id"];
                require_once("./Php/fonction.php");
                
                

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
									<option value="null">Selectionez une personne</option>
									<!-- Le select aura la valeur de l'id de la personne -->
                           		<?php selectPerso($id_anim,$listePerso, $listeAnim); ?>					
								
								<select>
								<input type='submit' name='envoie' value="Supprimer l'inscription">
								<input type='submit' name='supression' value="Supprimer l'animation">
							</form>
						
			</fieldset>
						<?php

						if (isset($_POST["envoie"])) {
							$gens = $_POST["selectPerso"];
							supprPerso($gens, $id_anim);
						}
						if(isset($_POST["supression"])){
							supprAnimation($id_anim);
						}





						require_once("./Php/footer.php");
				}

				else{
					header('Location: connexion.php');
					exit();
				}
			



?>




        
    </body>

</html>