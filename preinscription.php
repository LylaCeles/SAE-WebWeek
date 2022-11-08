<!DOCTYPE html>
<html lang="<?php echo $lang;?>">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The European Meals Tour - Préinscription</title>
    <link rel="stylesheet" href="./CSS/preinscription.css">
    <link rel="stylesheet" href="./CSS/accordion.css">
    <script src="./Script/accordion.js" defer></script>
    <?php
      require_once("./Php/meta.php");
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
        <h3><?php echo DESCR_PREINSCRIPTION;?></h3>

        <form action="" method="POST">
            <div class="form_group">
                <label for="nom"><?php echo FORM_NOM;?></label>
                <input type="text" name="nom" required>
            </div>
            <div class="form_group">
                <label for="prenom"><?php echo FORM_PRENOM;?></label>
                <input type="text" name="prenom" required>
            </div>
            <div class="form_group">
                <label for="email"><?php echo FORM_MAIL;?></label>
                <input type="email" name="email" required>
            </div>
            <div class="form_group">
                <label for="nb_places"><?php echo FORM_PALCES;?></label>
                <input type="number" name="nb_places" required>
            </div>
        

            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-item-header">
                        <h3><?php echo ACCORDEON_1_TITRE;?></h3>
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                         <div>
                            <img src="./Image/theatre.jpg" alt="image théatre">
                            
                            <p><?php echo ACCORDEON_1_HORAIRE;?></p>
                                <!-- Utiliser la base de donner pour créer le bon nombre de coches
                                Select par type d'anim puis afficher chaque horaire en check box -->
                                <select name="animationS">>
                                    <option selected="selected" value="null"><?php echo ACCORDEON_1_SELECT;?></option>
                                <?php selectAnim($listeAnim, "Spectacle");?>
                                </select>

                            <p><?php echo ACCORDEON_1_INFOS;?></p>

                         </div>

                            
                            <div class="flex">
                            <button class="btn"><a href="#"><?php echo ACCORDEON_1_INFOS_BUTTON;?></a></button>
                            <input class="btn" value ="S'inscrire"type="submit" name="btn">
                            </div>
                            

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-item-header">
                        <h3><?php echo ACCORDEON_2_TITRE;?></h3>
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                        <img src="./Image/atelier.jpg" alt="image apprentissage">
                            
                            <p><?php echo ACCORDEON_2_HORAIRE;?></p>
                                <!-- Utiliser la base de donner pour créer le bon nombre de coches
                                Select par type d'anim puis afficher chaque horaire en check box -->
                                <select  name="animationA">>
                                    <option selected="selected" value="null"><?php echo ACCORDEON_2_SELECT;?></option>
                                <?php selectAnim($listeAnim, "Apprentissage");?>
                                </select>

                            <p><?php echo ACCORDEON_2_INFOS;?></p>

                            
                            <div class="flex">
                            <button class="btn"><a href="#"><?php echo ACCORDEON_2_INFOS_BUTTON;?></a></button>
                            <input class="btn" value ="S'inscrire"type="submit" name="btn">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-item-header">
                        <h3><?php echo ACCORDEON_3_TITRE;?></h3>
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                        <img src="./Image/tournoi.jpg" alt=" image concours">
                            
                            <p><?php echo ACCORDEON_3_HORAIRE;?></p>
                                <!-- Utiliser la base de donner pour créer le bon nombre de coches
                                Select par type d'anim puis afficher chaque horaire en check box -->
                                <select name="animationC">
                                    <option selected="selected" value="null"><?php echo ACCORDEON_3_SELECT;?></option>
                                <?php selectAnim($listeAnim, "Concours");?>
                                </select>

                            <p><?php echo ACCORDEON_3_INFOS;?></p>

                            
                            <div class="flex">
                            <button class="btn"><a href="#"><?php echo ACCORDEON_3_INFOS_BUTTON;?></a></button>
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
                <h2><?php echo REP_FORMULAIRE_TITRE;?></h2>
                <p><?php echo REP_FORMULAIRE_TEXTE_1;?></p>
                <p><b><?php echo REP_FORMULAIRE_TEXTE_2;?></b></p>
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