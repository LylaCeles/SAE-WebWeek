<!DOCTYPE html> 
<html lang="fr">

	<head>
	  	<link rel="stylesheet" type="text/css" href="CSS/global.css">
	  	<link rel="stylesheet" type="text/css" href="CSS/connexion.css">
	  	<meta http-equiv="content-type" content="text/html"; charset="UTF-8"/>
		<link rel="icon" type="image/x-icon" href="favi_16x16.png">

	  	<meta name="description" content=""/>
		<title>The european meals tour</title>
		


	</head>
	<body>
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



        
    </body>

</html>