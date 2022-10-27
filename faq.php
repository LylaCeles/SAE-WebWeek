  <!-- FAQ -->


  <head>
        <?php
            require_once("./Php/meta.php")
        ?>
        <link rel = "stylesheet" href = "./CSS/faq.css">
        <link rel = "stylesheet" href = "./CSS/bouton.css">
        <link rel="stylesheet" href="./CSS/accordion.css">
        <script src="./Script/accordion.js" defer></script>
    </head>

    <?php
        require_once("./Php/header.php")
    ?>
<body>


  <section class="question">

                <h2>FAQ</h2>
                <p>Trouvez l'ensemble de nos questions les plus posées.</p>

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


                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p>Puis-je gouter les plats présents ?</p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p>Les différents stands vous proposent des dégustations pour pouvoir vivre une vraie expérience gastronomique et vous décider sur les plats que vous souhaiter acheter</p>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p>Que faire si je ne peux pas venir, alors que je me suis préinscrit à une animation ? </p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p>Si vous ne pouvez pas venir, pas de problème. Essayez de nous prévenir le plus tôt possible pour permettre de libérer votre place.</p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p>Il y a-t-il des espaces sanitaires ?</p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p>Nous avons installé des sanitaires au milieu du parcours pour rendre l'expérience meilleure pour tous.</p>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                    <div class="accordion-item-header">
                        <p>Toutes les régions seront t-elles présentes ?</p>
                    </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                <p>L'ensemble des régions française sera représenté gastronomiquement à notre événement.</p>
                            </div>
                        </div>
                    </div>
                </div>


            <p>Vous n'avez pas trouvé réponse à vos questions ?</p>
                <a href="contact.php">
                <button class="btn" type="button"  >Nous contacter</button>
                </a>

                </section>

</body>

<footer>

    <?php
        require_once("./Php/footer.php")
    ?>

</footer>


</html>
