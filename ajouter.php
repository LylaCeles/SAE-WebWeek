


<!DOCTYPE html> 
<html lang="fr">

	<head>
	<?php require_once("./Php/meta.php");?>
		<title>The european meals tour</title>
		</head>
	<body>
		<?php
        require_once("./Php/header.php");
        $requete = 'SELECT * FROM region';
		$resultat = $connection ->query($requete);
		$tabRegion = $resultat -> fetchAll();
		$resultat -> closeCursor();

        $requete = 'SELECT * FROM animation';
		$resultat = $connection ->query($requete);
		$tabAnim = $resultat -> fetchAll();
		$resultat -> closeCursor();

        $requete = 'SELECT * FROM plat';
		$resultat = $connection ->query($requete);
		$tabPlat = $resultat -> fetchAll();
		$resultat -> closeCursor();
        // Protection pour que personne ne puisse accèder a la page s'il n'est pas passé par le formulaire de la page connexion.php
			if (isset($_GET["type"])){
				$typeAjout = $_GET["type"];
                require_once("./Php/fonction.php");
                
                

        ?>

					<fieldset>

					<?php

                    if ($typeAjout=="animation") {
                        
                        
                        ?>
							</fieldset>
                            
							<fieldset>
                                <legend>Ajouter une animation</legend>
                                <form action="" method="POST">
                                    
                                <p>
                                <label for ="nom">Nom :</label>
                                <input type="text" name ="nom" placeholder="Nom de l'animation" required="required">
                                </p>
                                <p>
                                <label for ="description">Description :</label>
                                <textarea type="text" name ="description" placeholder="Dans cette animation..."required="required"></textarea>
                                </p>
                                <p>
                                <label for ="date">date :</label>
                                <input type="date" name ="date" value="2023-8-12"required="required">
                                </p>
                                <p>
                                <label for ="HoraireD">heure de début :</label>
                                <input type="time" name ="HoraireD" value="2023-8-12"required="required">
                                </p>
                                <p>
                                <label for ="HoraireF">heure de fin :</label>
                                <input type="time" name ="HoraireF" value="2023-8-12"required="required">
                                </p>
                                <p>
                                <label for ="nb_place">Nombre de place maximum :</label>
                                <input type="number" name ="nb_place"required="required">
                                </p>
                                <p>
                                <label for ="tarif">Tarif:</label>
                                <input type="number" name ="tarif"required="required">
                                </p>
                                <select name="animation">
                                    <option value="Spectacle">Théatre</option>
                                    <option value="Apprentissage">Apprentissage</option>
                                    <option value="Concours">Concours</option>
                                </select><br>
                            


				            <input type="submit" name="envoie" id="envoie_co">
                                        
                                    </fieldset>
                                    <?php


                                    if (isset($_POST["nom"])){
                                        $nom = $_POST["nom"];
                                        $description = $_POST["description"];
                                        $date = $_POST["date"];
                                        $horaireD = $_POST["HoraireD"];
                                        $horaireF = $_POST["HoraireF"];
                                        $type = $_POST["animation"];
                                        $nb_place = $_POST["nb_place"];
                                        $tarif = $_POST["tarif"];


                                        for ($i=0; $i <count($tabAnim) ; $i++) { 
                                            //Protection contre les doublons
                                            if ($tabAnim[$i]["nom_animation"]== $nom){
                                             $protection = 1;
                                            }
                                        
                                        }

                                        if (isset($protection)==false){

                                            creationAnim($nom, $description, $date, $horaireD, $horaireF, $type, $nb_place, $tarif);
                                        }


                                    }





                    }

                    elseif ($typeAjout=="plat") {
                        
                        ?>
                        </fieldset>
                        
                        <fieldset>
                            <legend>Ajouter une animation</legend>
                            <form action="" method="POST">
                                
                            <p>
                            <label for ="nom">Nom :</label>
                            <input type="text" name ="nom" placeholder="Nom du plat">
                            </p>
                            <p>
                            <label for ="description">Description :</label>
                            <textarea type="text" name ="description" placeholder="Ce plat..."></textarea>
                            </p>
                            <p>
                            <label for ="ingredient">Ingredients :</label>
                            <textarea type="text" name ="ingredient" placeholder="Veuillez les séparer d'une virgule !!"></textarea>
                            </p>
                            
                            <select name="region">
                                <?php
                                for ($i=0; $i <count($tabRegion) ; $i++) { 
                                    ?><option value="<?php echo$tabRegion[$i]["id_region"];?>"><?php echo$tabRegion[$i]["nom_region"]?></option>
                                    <?php
                                }
                                ?>
                                
                            </select><br>
                        


                        <input type="submit" name="envoie" id="envoie_co">
                                    
                                </fieldset>
                                <?php


                        if (isset($_POST["nom"])){
                            $nom = $_POST["nom"];
                            $description = $_POST["description"];
                            $ingredient = $_POST["ingredient"];
                            $region = $_POST["region"];
                            


                            for ($i=0; $i <count($tabPlat) ; $i++) { 
                                //protection contre les doublons
                                if ($tabPlat[$i]["nom_plat"]== $nom){
                                $protection = 1;
                                }
                            
                            }

                            if (isset($protection)==false){

                                creationPlat($nom, $description,$ingredient, $region);
                            }


                        }
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