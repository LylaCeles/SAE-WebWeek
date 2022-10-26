<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>The European Meals Tour - Régions</title>

    <link rel="stylesheet" href="./CSS/region.css">   
    <link rel="stylesheet" href="./CSS/accordion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="./Script/accordion.js" defer></script>
    <?php
      require_once("Php/meta.php");
    ?>

  </head>
  <body>
    <?php
      require_once("./Php/header.php")
    ?>
    <section>
      <div id="TextePrincipal">
        <h1>Gastronomie des régions</h1>
        <div id="premierTrait"></div>
        <h3>Découvrez ici la gastronomie Française ! <br>
            Choisissez un plat : vous aurez son histoire , ses ingrédients et sa recette. </h3>
      </div>
      <div id="imagePrincipale">
      </div>
    </section>
    <section id="presentation">
      <div id="texteIntro">
        <h2>Les produits par régions</h2>
      </div>
    </section>

    <section id="region">
      <div class="accordion">
        <div class="accordion-item">
            <div class="accordion-item-header">
                <h2>Intitulé de l'accordéon</h2>
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                  <div class="lescartes">

                    <div class="container">
                      <div class="card">
                        <div class="front"></div>
                        <div class="back">
                          <h1>Back of Card</h1>
                          <p>Additional info on the back of the card</p>
                        </div>
                      </div>
                    </div>
            
                    <div class="container">
                      <div class="card">
                        <div class="front"></div>
                        <div class="back">
                          <h1>Back of Card</h1>
                          <p>Additional info on the back of the card</p>
                        </div>
                      </div>
                    </div>
            
                    <div class="container">
                      <div class="card">
                        <div class="front"></div>
                        <div class="back">
                          <h1>Back of Card</h1>
                          <p>Additional info on the back of the card</p>
                        </div>
                      </div>
                    </div>

                    <div class="container">
                      <div class="card">
                        <div class="front"></div>
                        <div class="back">
                          <h1>Back of Card</h1>
                          <p>Additional info on the back of the card</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <?php
      require_once("./Php/footer.php")
    ?>

  </body>

</html>