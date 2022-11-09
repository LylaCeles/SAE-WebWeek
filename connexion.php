<!DOCTYPE html> 
<html lang="fr">

	<head>
		<?php require_once("./Php/meta.php");?>
		<title>The European Meals Tour - Connexion</title>
		<meta property="og:title" content="The European Meals Tour - Connexion" />
		<link rel="stylesheet" href="./CSS/connexion.css">
	</head>
	<body>
		<?php
		require_once("./Php/header.php");
		?>
		<h2>Vous pouvez vous connecter au compte administrateur.</h2>

<!-- ************* Formulaire pour se connecter au compte admin *************** -->
        <fieldset>
            <legend><h3>Connexion</h3></legend>
			<form action ="admin.php" method="POST">
				<p>
					<label for ="id">Votre identifiant :</label>
					<input type="text" name ="id" placeholder="Identifiant" required="required">
				</p>
				<p>
					<label for ="mdp">Votre mot de passe :</label>
					<input type="password" name ="mdp" placeholder="Confidenciel !" required="required">
				</p>
				<br>
				<input type="submit" name="envoie" class="btn">


			</form>
        </fieldset>
		<br>

		<?php require_once("./Php/footer.php")?>

        
    </body>

</html>