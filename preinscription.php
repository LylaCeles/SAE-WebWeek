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
    ?>

    <div class="container">
        <?php
            if (!isset($_POST["email"])) {
        ?>
        <h2>Formulaire de préinscription</h2>
        <p>Vous pouvez vous préinscrire pour participer aux différentes animations. Le réglement se fera sur place </p>

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
                <input type="text" name="nb_places" required>
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
                            <input type="checkbox" name="horaire1">
                            <label for="horaire1">16h30 vendredi</label>

                            <input type="checkbox" name="horaire2">
                            <label for="horaire2">11h30 samedi</label>

                            <input type="checkbox" name="horaire3">
                            <label for="horaire3">16h30 samedi</label>

                            <input type="checkbox" name="horaire4">
                            <label for="horaire4">11h30 dimanche</label>

                            <p>Besoin de plus d'informations sur l'activité  ?</p>

                            <a href="#"><button class="btn" type="button"  >En savoir plus</button></a>

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
                            <input type="checkbox" name="horaire1">
                            <label for="horaire1">14h00 vendredi</label>

                            <input type="checkbox" name="horaire2">
                            <label for="horaire2">18h00 vendredi</label>

                            <input type="checkbox" name="horaire3">
                            <label for="horaire3">14h00 samedi</label>

                            <input type="checkbox" name="horaire4">
                            <label for="horaire4">18h00 samedi</label>

                            <p>Besoin de plus d'informations sur l'activité  ?</p>
                            <a href="#"><button class="btn" type="button"  >En savoir plus</button></a>
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
                            <input type="checkbox" name="horaire1">
                            <label for="horaire1">14h00 dimanche</label>

                            <p>Besoin de plus d'informations sur l'activité  ?</p>

                            <a href="#"><button class="btn" type="button"  >En savoir plus</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex">
                <input class="btn" type="submit" name="btn">
            </div>
            
        </form>

        <?php
            }
        if(isset($_POST["email"])){
            ?>
            <section>
                <h1>Merci pour votre préinscription !</h1>
                <p>Votre préinscription à bien été prise en compte, le réglement se fera sur le site de l'événement.</p>
            </section>
            <?php
        }
        ?>

    </div>
    
    
    <?php
      require_once("./Php/footer.php")
    ?>
</body>

</html>