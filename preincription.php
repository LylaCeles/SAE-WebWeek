<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The European Meals Tour - Préinscription</title>
    
            <!-- Styles -->
    <link rel="stylesheet" href="./CSS/Global.css">
    <link rel="stylesheet" href="./CSS/preinscription.css">
    <link rel="stylesheet" href="./CSS/accordion.css">    

            <!-- Scripts -->
    <script src="./Script/accordion.js" defer></script>
</head>

<body>
    <div class="container">
        <!-- class à passer en flex -->
        <h1>Formulaire de préinscription</h1>
        <p>Vous pouvez vous préinscrire pour participer aux différentes animations. Le réglement se fera sur place </p>

        <form action="" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" name="nom">

            <label for="prenom">Prenom :</label>
            <input type="text" name="prenom">

            <label for="email">Adresse mail :</label>
            <input type="email" name="email">

            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-item-header">
                        <h2>Theatre culinaire</h2>
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                            <img src="./Image/theatre.jpg" alt="">
                            
                            <p>Choisissez votre horaire</p>
                                <!-- Utiliser la base de donner pour créer le bon nombre de coches
                                Select par type d'anim puis afficher chaque horaire en check box -->
                            <input type="checkbox" name="horaire1">
                            <label for="horaire1">12h00</label>

                            <input type="checkbox" name="horaire2">
                            <label for="horaire2">14h00</label>

                            <input type="checkbox" name="horaire3">
                            <label for="horaire3">16h00</label>

                            <p>Besoin de plus d'informations sur l'activité  ?</p>

                            <a href="#">En savoir plus</a>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-item-header">
                        <h2>Apprentissage</h2>
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                        <img src="./Image/theatre.jpg" alt="">
                            
                            <p>Choisissez votre horaire</p>
                                <!-- Utiliser la base de donner pour créer le bon nombre de coches
                                Select par type d'anim puis afficher chaque horaire en check box -->
                            <input type="checkbox" name="horaire1">
                            <label for="horaire1">12h00</label>

                            <input type="checkbox" name="horaire2">
                            <label for="horaire2">14h00</label>

                            <input type="checkbox" name="horaire3">
                            <label for="horaire3">16h00</label>

                            <p>Besoin de plus d'informations sur l'activité  ?</p>

                            <a href="#">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-item-header">
                        <h2>Concour</h2>
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                        <img src="./Image/theatre.jpg" alt="">
                            
                            <p>Choisissez votre horaire</p>
                                <!-- Utiliser la base de donner pour créer le bon nombre de coches
                                Select par type d'anim puis afficher chaque horaire en check box -->
                            <input type="checkbox" name="horaire1">
                            <label for="horaire1">12h00</label>

                            <input type="checkbox" name="horaire2">
                            <label for="horaire2">14h00</label>

                            <input type="checkbox" name="horaire3">
                            <label for="horaire3">16h00</label>

                            <p>Besoin de plus d'informations sur l'activité  ?</p>

                            <a href="#">En savoir plus</a>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>

</body>

</html>