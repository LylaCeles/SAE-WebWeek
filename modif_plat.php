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
                

                require_once("./Php/config.php");
                $connection = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nombase, $user, $mdp );

                $requete = 'SELECT * FROM plat WHERE id_plat ='. $id_plat;
                $resultat = $connection ->query($requete);
                $tabPlat = $resultat -> fetchAll();
                $resultat -> closeCursor();

                $requete = 'SELECT * FROM region WHERE id_region = '.$tabPlat[0]["id_region"];
                $resultat = $connection ->query($requete);
                $tabRegion = $resultat -> fetchAll();
                $resultat -> closeCursor();

                $requete = 'SELECT * FROM region';
                $resultat = $connection ->query($requete);
                $tabAllRegion = $resultat -> fetchAll();
                $resultat -> closeCursor();


        ?>

					<fieldset>
                        <form enctype="multipart/form-data" action="modif_plat.php?id=<?php echo($id_plat); ?>" method="POST">
            		    <legend><h3><?php echo $tabPlat[0]["nom_plat"] ?></h3></legend>


                        <img src='<?php echo( $tabPlat[0]["image_plat"]); ?>'>
                        <br>
                        <input type="file" accept="image/png,image/webp,image/jpeg" name ="image">


                            <p>
                                <label for ="nom">Nom :</label>
                                <input type="text" name="nom" value='<?php echo($tabPlat[0]["nom_plat"]);?>'>
                            </p>
                            <p>
                                <label for ="nom">Nom en anglais :</label>
                                <input type="text" name="nomEn" value='<?php echo($tabPlat[0]["nom_plat_anglais"]);?>'>
                            </p>
                            <p>
                                <br>
                                <label for ="description">Description :</label>
                                <br>
                                <textarea type="text" name ="description"><?php echo($tabPlat[0]["description_plat"]); ?></textarea>
                            </p>
                            
                            <p>
                                <label for ="descriptionEn">Description en anglais :</label>
                                <br>
                                <textarea type="text" name ="descriptionEn"><?php echo($tabPlat[0]["description_plat_anglais"]); ?></textarea>
                            </p>
                            <p>
                                <label for ="ingredient">Ingredients :</label>
                                <br>
                                <textarea type="text"  name ="ingredient"><?php echo($tabPlat[0]["ingredients_plat"]); ?></textarea>
                            </p>
                            

                            <p>
                                <label for ="ingredientEn">Ingredients en anglais :</label>
                                <br>
                                <textarea type="text"  name ="ingredientEn"><?php echo($tabPlat[0]["ingredients_plat_anglais"]); ?></textarea>
                            </p>


                            <select name="region">
                                <?php
                                for ($i=0; $i <count($tabAllRegion) ; $i++) {
                                    if($tabAllRegion[$i]["id_region"]!= $tabRegion[0]["id_region"]){
                                         ?><option value="<?php echo$tabAllRegion[$i]["id_region"];?>"><?php echo$tabAllRegion[$i]["nom_region"]?></option>
                                    <?php
                                    }
                                    else{
                                        ?><option selected="selected" value="<?php echo$tabRegion[0]["id_region"];?>"><?php echo$tabRegion[0]["nom_region"]?></option >

                                        <?php

                                    }
                            
                                   
                                }
                                ?>
                                
                            </select><br>


				            <input type="submit" name="envoie" id="envoie_co" class="btn btn_marge">
                            <input type='submit' name='supression' value="Supprimer le plat" class="btn btn_marge">


                        <form>

                        
				</fieldset>

					<?php
				}

				else{
					header('Location: connexion.php');
					exit();
				}


                if (isset($_POST["envoie"])){
                    $nom = $_POST["nom"];
                    $description = $_POST["description"];
                    $ingredient = $_POST["ingredient"];
                    $nomEn = $_POST["nomEn"];
                    $descriptionEn = $_POST["descriptionEn"];
                    $ingredientEn = $_POST["ingredientEn"];
                    $region = $_POST["region"];
                    //print_r($_FILES);

                    
                        //Si l'image a était modifié, on l'enregistre
                        $url = './Image/plat/'. basename($_FILES['image']['name']);
                       
                    
                    if ($url != './Image/plat/'){
                        //Si l'url contient une nouvelle image, alors on l'enregistre
                        move_uploaded_file($_FILES['image']['tmp_name'], $url);

                    }
                    else{
                        //Sinon on concerve le meme url
                        $url = $tabPlat[0]["image_plat"];
                    }
                    //Fonction qui modifie la base de donnée
                    modifPlat($id_plat, $nom, $description,$ingredient, $nomEn, $descriptionEn, $ingredientEn, $region, $url);
                    echo('<script type="text/javascript">
                        function RedirectionJavascript(){
                                document.location.href="modif_plat.php?id='.$id_plat.'";
                             }
                             RedirectionJavascript();
                     </script>');
                    
                     
                                 
                    
                }
                if(isset($_POST["supression"])){
                    supprPlat($id_plat);
                }
                
			
                require_once("./Php/footer.php")



?>




        
    </body>

</html>