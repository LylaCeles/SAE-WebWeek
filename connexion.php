<!DOCTYPE html> 
<html lang="fr">

	<head>
	  	<link rel="stylesheet" type="text/css" href="CSS/Global.css">
	  	<link rel="stylesheet" type="text/css" href="CSS/connexion.css">
	  	<meta http-equiv="content-type" content="text/html"; charset="UTF-8"/>
		<link rel="icon" type="image/x-icon" href="favi_16x16.png">

	  	<meta name="description" content=""/>
		<title>The european meals tour</title>
		


	</head>
	<body>
		<?php
      		require_once("./Php/header.php")
    	?>

<!-- ************* Formulaire pour se connecter au compte admin *************** -->
        <fieldset>
            <legend>Veuillez-vous connecter</legend>
			<form action ="admin.php" method="POST">
				<p>
					<label for ="id">Votre identifiant :</label>
					<input type="text" name ="id" placeholder="identifiant" required="required">
				</p>
				<p>
					<label for ="mdp">Votre mot de passe :</label>
					<input type="password" name ="mdp" placeholder="Confidenciel !" required="required">
				</p>
				<input type="submit" name="envoie" id="envoie_co">


			</form>
        </fieldset>



		<?php
      		require_once("./Php/footer.php")
    	?>    
    </body>

</html>