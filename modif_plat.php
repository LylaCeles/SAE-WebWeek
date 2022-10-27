


<!DOCTYPE html> 
<html lang="fr">

	<head>
    <?php require_once("./Php/meta.php");?>


	  	<meta name="description" content=""/>
		<title>The european meals tour</title>
		</head>
	<body>
		<?php
            require_once("./Php/header.php");

			// Protection pour que personne ne puisse accèder a la page s'il n'est pas passé par le formulaire de la page connexion.php
			if (isset($_GET["id"])){
				$id_plat = $_GET["id"];
                

                $connection = new PDO('mysql:host=localhost;port=3306;dbname=web_week','root','');
                $requete = 'SELECT * FROM plat WHERE id_plat ='. $id_plat;
                $resultat = $connection ->query($requete);
                $tabPlat = $resultat -> fetchAll();
                $resultat -> closeCursor();

                $requete = 'SELECT * FROM region WHERE id_region = '.$tabPlat[0]["id_region"];
                $resultat = $connection ->query($requete);
                $tabRegion = $resultat -> fetchAll();
                $resultat -> closeCursor();


        ?>

					<fieldset>
                        <form action="" method="POST">
            		    <legend><?php echo $tabPlat[0]["nom_plat"] ?></legend>

                            <p>
                                <label for ="description">Description :</label>
                                <textarea type="text" name ="description"><?php echo($tabPlat[0]["description_plat"]); ?></textarea>
                            </p>

                            <p>
                                <label for ="ingredient">Ingredients :</label>
                                <textarea type="text"  name ="ingredient"><?php echo($tabPlat[0]["ingredients_plat"]); ?></textarea>
                            </p>

                            <input type="file" accept="image/png, image/jpg" name="img_plat">

				            <input type="submit" name="envoie" id="envoie_co">

                        <form>
				</fieldset>

					<?php
				}

				else{
					header('Location: connexion.php');
					exit();
				}


                if (isset($_POST["description"])){
                    if(file_get_content($chemin)!=false){
                    $img = $_FILES["img_plat"]["name"];
                    // $url = 'https://waytolearnx.com/wp-content/uploads/2018/09/cropped-logoWeb.png';
                    $chemin = 'CSS/logo.png';
                    // Enregistrer l'image
                    file_put_contents($chemin, file_get_contents($chemin));
                    echo("couocu");
                    }
                }
			
                require_once("./Php/footer.php")



?>




        
    </body>

</html>