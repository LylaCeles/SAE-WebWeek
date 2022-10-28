<!DOCTYPE html> 
<html lang="fr">

	<head>
        <?php require_once("./Php/meta.php");?>
		<title>The european meals tour</title>
        <link rel="stylesheet" href="./CSS/modif_plat.css">
		</head>
	<body>
		<?php
            require_once("./Php/header.php");
            require_once("./Php/fonction.php");

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
            		    <legend><h3><?php echo $tabPlat[0]["nom_plat"] ?></h3></legend>

                            <p>
                                <label for ="description">Description :</label>
                                <br>
                                <textarea type="text" name ="description"><?php echo($tabPlat[0]["description_plat"]); ?></textarea>
                            </p>

                            <p>
                                <label for ="ingredient">Ingredients :</label>
                                <br>
                                <textarea type="text"  name ="ingredient"><?php echo($tabPlat[0]["ingredients_plat"]); ?></textarea>
                            </p>

                            <input type="file" accept="image/png, image/jpg" name="img_plat">

				            <input type="submit" name="envoie" id="envoie_co" class="btn">
                            <input type='submit' name='supression' value="Supprimer le plat" class="btn">


                        <form>
				</fieldset>

					<?php
				}

				else{
					header('Location: connexion.php');
					exit();
				}


                if (isset($_POST["description"])){
                    // if(file_get_content($chemin)!=false){
                    // $img = $_FILES["img_plat"]["name"];
                    // // $url = 'https://waytolearnx.com/wp-content/uploads/2018/09/cropped-logoWeb.png';
                    // $chemin = 'CSS/logo.png';
                    // // Enregistrer l'image
                    // file_put_contents($chemin, file_get_contents($chemin));
                    // echo("couocu");
                    // }
                }
                if(isset($_POST["supression"])){
                    supprPlat($id_plat);
                }
			
                require_once("./Php/footer.php")



?>




        
    </body>

</html>