


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

			// Protection pour que personne ne puisse accèder a la page s'il n'est pas passé par le formulaire de la page connexion.php
			if (isset($_GET["id"])){
				$id_anim = $_GET["id"];
                require_once("fonction.php");
                
                

        ?>

					<fieldset>
                        <form action="" method="POST">
            		    <legend></legend>
                            <?php
                            

								affichage($id_anim, $listeAnim,$listePerso);


?>
                         <form>
				</fieldset>

					<?php
				}

				else{
					header('Location: connexion.php');
					exit();
				}
			



?>




        
    </body>

</html>