<!DOCTYPE html>
<html lang="fr">

<html>
    <head>
        <title>The European Meals Tour - Accueil</title>
        <?php
            require_once("./Php/meta.php");
        ?>

                <!-- Style -->
        <link rel = "stylesheet" href = "./CSS/index.css">
        <link rel="stylesheet" href="./CSS/accordion.css"> 

                <!-- Script -->
        <script src="./Script/accordion.js" defer></script>
    </head>
    <body>

        <?php
        require_once("./Php/header.php")
        ?>

        <section class="main">

            <!-- Introduction -->
            <section class="banniere">
                <div class="filtre">
                    <h1 id="titre">The European Meals Tour</h1>
                </div>
            </section>
            <br>
            <p>Bienvenue sur le site du salon "The European Meals Tour" !
                <br><br>Vous pourrez retrouver les différentes animations proposées avec leur date et horaires. De plus, chaque plat proposé par les chefs des régions est détaillé.
                <br><br>N'hésitez pas à vous pré-inscrire aux nombreuses activités !
            </p>

            <!-- Planning -->
            <section class="planning">
                <h2>Planning</h2>
                <p>Le salon ouvre de 11h à 24h, du 19 au 21 mai 2023.</p>
                <br>

                <?php
                    //connexion bdd et requete
                    $requete='SELECT * FROM animation';
                    $resultats = $connection->query($requete);
                    $tabAnimation=$resultats->fetchAll();
                    $resultats->closeCursor();
                    $nbAnimation=count($tabAnimation);

                    // Tableau planning
                    echo'<table id="planning">'.'<th id="entete">'."Date".'</th>'.'<th id="entete">'."Nom".'</th>'.'<th id="entete">'."Heure de début".'</th>'.'<th id="entete">'."Heure de fin".'</th>';
                    for($i=0; $i<$nbAnimation; $i++){
                        echo'<tr id="ligne">'.'<td>'.$tabAnimation[$i]["date_animation"].'</td>'.'<td>'.$tabAnimation[$i]["nom_animation"].'</td>'.'<td>'.$tabAnimation[$i]["horaire_debut"].'</td>'.'<td>'.$tabAnimation[$i]["horaire_fin"].'</td>'.'</tr>';
                    }
                    echo'</table>';
                ?>

                <a href="animation.php"><button class="btn">Plus d'informations sur les animations</button></a>
            </section>
            <section class="plat">
                <h2>Découvrez de nouveaux plats</h2>
                <p>Trouvez ici trois plats aléatoires gastronomiques français.
                    <br>Pour en voir plus cliquez sur un des plats !
                </p>


                <!-- Faire les animations des images aléatoires en php -->
                <div class="lescartes">

                <?php 
                    $requete = 'SELECT * FROM `plat` ';
                    $resultat = $connection ->query($requete);
                    $tabPlat = $resultat -> fetchAll();
                    $resultat -> closeCursor();

                    for ($i=0; $i < 3 ; $i++) { 
                    
                    $rand_id = rand(0,count($tabPlat) - 1);
                ?>

                    <div class="container">
                    <div class="card">
                        <div class="front" style="background-image: url(<?php echo $tabPlat[$rand_id]["image_plat"] ?>);"></div> 
                        <div class="back">
                        <h4><?php echo $tabPlat[$rand_id]["nom_plat"] ?></h4>
                        <p><?php echo $tabPlat[$rand_id]["description_plat"] ?></p>
                        <div>
                            <p><b>Ingrédients :</b><br><?php echo $tabPlat[$rand_id]["ingredients_plat"] ?></p>
                        </div>
                        </div>
                    </div>
                    </div>
              
                <?php 
                    }   
                ?>
                </div>
                <a href="region.php"><button class="btn">Découvrez tout les plats présents</button></a>
            </section>

            <!-- FAQ -->
            <section class="question">
                <h2>Des questions ?</h2>
                <p>Trouvez ici les questions qui nous sont plus posées.</p>
                
                <!-- Accordéon -->
                <div class="accordion">
                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p>Que faites-vous des plats invendus ?</p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p>Nous les donnons à des associations caritatives comme <i>La Croisée Des Saveurs</i> ou encore la <i>Banque Alimentaire d'Auvergne</i>.</p>
                            </div>  
                        </div>
                    </div>
                
                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p>Qui participe au concours ?</p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p>Les équipes cuisinières des stands volontaires.</p>
                            </div>  
                        </div>
                    </div>

                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p>Qui sont les jury du concours ?</p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p>Ce sont les chefs cuisiniers des différents stands, choisis sur volontariat. Ils seront 10. Ceux-ci ne noteront pas leurs propres spécialités.
                                    <br>Les spectateurs volontaires pourront aussi voter !
                                </p>
                            </div>  
                        </div>
                    </div>

                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p>Les animations sont-elles tout public ?</p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p>Bien sûr ! Les histoires raccontées lors des spectacles amuseront aussi bien les petits que pour les grands. La difficulté des apprentissages varira suivant les participants.</p>
                            </div>  
                        </div>
                    </div>
                </div>

                <a href="faq.php"><button class="btn">Plus de questions ici</button></a>
            </section>

            <!-- Sponsors -->
            <section class="sponsors">
                <h2>Sponsors</h2>
                <div class="imgsponso">
                    <img src="Image/logo-partenaires/logo-bonduelle.png" alt="logo bonduelle" width=150px>
                    <img src="Image/logo-partenaires/logo-lustucru.png" alt="logo lustucru" width=150px> 
                    <img src="Image/logo-partenaires/logo-nestle.png" alt="logo nestlé" width=150px>
                    <img src="Image/logo-partenaires/logo-volvic.png" alt="logo volvic" width=150px>
                    <img src="Image/logo-partenaires/logo-styorre.png" alt="logo St Yorre" width=150px>
                </div>
            </section>

            <?php
                require_once("./Php/footer.php")
            ?>

        </section>
    </body>
</html>
