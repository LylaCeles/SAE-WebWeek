<!DOCTYPE html>
<html lang="<?php echo $lang;?>">

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
            <p><?php echo BIENVENUE;?></p>

            <!-- Planning -->
            <section class="planning">
                <h2><?php echo PLANNING;?></h2>
                <p><?php echo DESCR_PLANNING;?></p>
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
                        echo'<tr id="ligne">'.'<td>'.$tabAnimation[$i]["date_animation"].'</td>'.'<td>'.$tabAnimation[$i][NOM_ANIMATION].'</td>'.'<td>'.$tabAnimation[$i]["horaire_debut"].'</td>'.'<td>'.$tabAnimation[$i]["horaire_fin"].'</td>'.'</tr>';
                    }
                    echo'</table>';
                ?>

                <a href="animation.php"><button class="btn"><?php echo BTN_PLANNING;?></button></a>
            </section>
            <section class="plat">
                <h2><?php echo PLATS;?></h2>
                <p><?php echo DESCR_PLATS;?></p>


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
                        <h4><?php echo $tabPlat[$rand_id][NOM_PLAT] ?></h4>
                        <p><?php echo $tabPlat[$rand_id][DESCR_PLAT] ?></p>
                        <div>
                            <p><b><?php echo TITRE_INGREDIENTS_PLAT;?></b><br><?php echo $tabPlat[$rand_id][INGREDIENTS_PLAT] ?></p>
                        </div>
                        </div>
                    </div>
                    </div>
              
                <?php 
                    }   
                ?>
                </div>
                <a href="region.php"><button class="btn"><?php echo BTN_PLATS;?></button></a>
            </section>

            <!-- FAQ -->
            <section class="question">
                <h2><?php echo FAq;?></h2>
                <p><?php echo DESCR_FAQ;?></p>
                
                <!-- Accordéon -->
                <div class="accordion">
                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p><?php echo Q_ACCORDEON_1;?></p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p><?php echo R_ACCORDEON_1;?></p>
                            </div>  
                        </div>
                    </div>
                
                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p><?php echo Q_ACCORDEON_2;?></p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p><?php echo R_ACCORDEON_2;?></p>
                            </div>  
                        </div>
                    </div>

                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p><?php echo Q_ACCORDEON_3;?></p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p><?php echo R_ACCORDEON_3;?>
                                </p>
                            </div>  
                        </div>
                    </div>

                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p><?php echo Q_ACCORDEON_4;?></p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p><?php echo R_ACCORDEON_4;?></p>
                            </div>  
                        </div>
                    </div>
                </div>

                <a href="faq.php"><button class="btn"><?php echo BTN_FAQ;?></button></a>
            </section>

            <!-- Sponsors -->
            <section class="sponsors">
                <h2><?php echo SPONSORS;?></h2>
                <div>
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
