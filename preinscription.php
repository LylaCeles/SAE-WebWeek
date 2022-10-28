<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The European Meals Tour - Préinscription</title>
    <link rel="stylesheet" href="./CSS/preinscription.css">
    <link rel="stylesheet" href="./CSS/accordion.css">
    <script src="./Script/accordion.js" defer></script>
    <?php
      require_once("Php/meta.php");
    ?>
</head>

<body>
    <?php
        require_once("./Php/header.php");
        require_once("./Php/fonction.php");
		$requete = 'SELECT * FROM animation';
		$resultat = $connection ->query($requete);
		$tabAnimation = $resultat -> fetchAll();
		$resultat -> closeCursor();

        $requete = 'SELECT * FROM personne';
        $resultat = $connection ->query($requete);
        $tabPersonne = $resultat -> fetchAll();
        $resultat -> closeCursor();
    ?>

    <div class="container">
        <?php
            if (!isset($_POST["email"])) {
        ?>
        <h2><?php echo TITRE_PREINSCRIPTION;?></h2>
        <p><?php echo DESCR_PREINSCRIPTION;?></p>

        <form action="" method="POST">
            <div class="form_group">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" required>
            </div>
            <div class="form_group">
                <label for="prenom">Prenom :</label>
                <input type="text" name="prenom" required>
            </div>
            <div class="form_group">
                <label for="email">Adresse mail :</label>
                <input type="email" name="email" required>
            </div>
            <div class="form_group">
                <label for="nb_places">Nombre de places :</label>
                <input type="number" name="nb_places" required>
            </div>

            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-item-header">
                        <h3>Theatre culinaire</h3>
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                            <img src="./Image/theatre.jpg" alt="">
                            
                            <p>Choisissez votre horaire</p>
                                <!-- Utiliser la base de donner pour créer le bon nombre de coches
                                Select par type d'anim puis afficher chaque horaire en check box -->
                                <select name="animationS">>
                                    <option selected="selected" value="null">Selectionez un spectacle</option>
                                <?php selectAnim($listeAnim, "Spectacle");?>
                                </select>

                            <p>Besoin de plus d'informations sur l'activité  ?</p>

                            
                            <div class="flex">
                            <button class="btn"><a href="#">En savoir plus</a></button>
                            <input class="btn" value ="S'inscrire"type="submit" name="btn">
                            </div>
                            

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-item-header">
                        <h3>Apprentissage</h3>
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                        <img src="./Image/theatre.jpg" alt="">
                            
                            <p>Choisissez votre horaire</p>
                                <!-- Utiliser la base de donner pour créer le bon nombre de coches
                                Select par type d'anim puis afficher chaque horaire en check box -->
                                <select  name="animationA">>
                                    <option selected="selected" value="null">Selectionez un apprentissage</option>
                                <?php selectAnim($listeAnim, "Apprentissage");?>
                                </select>

                            <p>Besoin de plus d'informations sur l'activité  ?</p>

                            
                            <div class="flex">
                            <button class="btn"><a href="#">En savoir plus</a></button>
                            <input class="btn" value ="S'inscrire"type="submit" name="btn">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-item-header">
                        <h3>Concours</h3>
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                        <img src="./Image/theatre.jpg" alt="">
                            
                            <p>Choisissez votre horaire</p>
                                <!-- Utiliser la base de donner pour créer le bon nombre de coches
                                Select par type d'anim puis afficher chaque horaire en check box -->
                                <select name="animationC">
                                    <option selected="selected" value="null">Selectionez un concours</option>
                                <?php selectAnim($listeAnim, "Concours");?>
                                </select>

                            <p>Besoin de plus d'informations sur l'activité  ?</p>

                            
                            <div class="flex">
                            <button class="btn"><a href="#">En savoir plus</a></button>
                            <input class="btn" value ="S'inscrire"type="submit" name="btn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          
            
        </form>

        <?php
            }
            if(isset($_POST["email"])){
            
                $email= $_POST["email"];
                $nom= $_POST["nom"];
                $prenom= $_POST["prenom"];
                $nb_places= $_POST["nb_places"];
                if ($_POST["animationS"]!='null') {
                    $id_animation= $_POST["animationS"];
                }
                if ($_POST["animationA"]!='null') {
                    $id_animation= $_POST["animationA"];
                }
                if ($_POST["animationC"]!='null') {
                    $id_animation= $_POST["animationC"];
                }
                if (isset($id_animation)){

                
                    for ($i=0; $i < count($tabPersonne) ; $i++) { 
        
                    if ($tabPersonne[$i]["nom_personne"]== $nom && $tabPersonne[$i]["prenom_personne"]== $prenom && $tabPersonne[$i]["email_personne"]== $email) {
                        //protection pour empecher les doublons de personne dans la bdd
                            $protection = 1;
                    }
                    
                        
                        
                            
                        }
                        if (isset($protection)==False){
                            // S'il n'y a pas de personne avec les meme identifiant, alors on le crée
                            insertion($nom, $prenom, $email);
        
                            //Va récuperer la personne dans la bdd
                            $requete = 'SELECT * FROM personne';
                            $resultat = $connection ->query($requete);
                            $tabPerso = $resultat -> fetchAll();
                            $resultat -> closeCursor();
                            //Actualisation de la table personnage afin de pouvoir trouver l'id de la nouvelle personne.
                            for ($i=0; $i <count($tabPerso) ; $i++) { 
                                                                    
                                    //on parcourt le tableau des personnes pour aller chercher la personne crée, cela nécessite de redéfinir le tableau...
                                    if ($tabPerso[$i]['nom_personne']== $nom && $tabPerso[$i]['prenom_personne']== $prenom && $tabPerso[$i]["email_personne"]== $email){
                                    $id_perso = $tabPerso[$i]["id_personne"];
                                    preInscription($id_animation,$id_perso, $nb_places);}}
        
                                    }
                        
            ?>
            <section>
                <h2>Merci pour votre préinscription !</h2>
                <p>Votre préinscription à bien été prise en compte, le réglement se fera sur le site de l'événement.</p>
                <p><b>Pour toute désinscription, veuillez nous le communiquer par mail</b></p>
            </section>
            <?php
            }
            else{
                header('Location: preinscription.php');
				exit();
            }
        }
        ?>

    </div>
    
    
    <?php
      require_once("./Php/footer.php");
    ?>
</body>

</html>