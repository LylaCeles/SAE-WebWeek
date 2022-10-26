<!DOCTYPE html>
<html lang="fr">

<head>
  <title>The European Meals Tour - Régions</title>

  <?php
  require_once("Php/meta.php");
  ?>

        <!-- Style -->
  <link rel="stylesheet" href="./CSS/region.css">
  <link rel="stylesheet" href="./CSS/accordion.css">

        <!-- Script -->
  <script src="./Script/accordion.js" defer></script>
</head>

<body>
  <?php
    require_once("./Php/header.php")
  ?>
  <section class="flex">

    <h2>Gastronomie des régions</h2>

    <div id="premierTrait"></div>

    <h3>Découvrez ici la gastronomie Française ! <br>
      Choisissez un plat : vous aurez son histoire , ses ingrédients et sa recette </h3>

    <img src="./Image/baniere.jpg" alt="" class="img">
    </div>

    <h2>Les produits par régions</h2>
  
    <div class="accordion">
      <div class="accordion-item">
        <div class="accordion-item-header">
          <h3>Intitulé de l'accordéon</h3>
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="lescartes">

              <div class="container">
                <div class="card">
                  <div class="front"></div>
                  <div class="back">
                    <h3>Back of Card</h3>
                    <p>Additional info on the back of the card</p>
                  </div>
                </div>
              </div>


              <div class="container">
                <div class="card">
                  <div class="front"></div>
                  <div class="back">
                    <h3>Back of Card</h3>
                    <p>Additional info on the back of the card</p>
                  </div>
                </div>
              </div>

              <div class="container">
                <div class="card">
                  <div class="front"></div>
                  <div class="back">
                    <h3>Back of Card</h3>
                    <p>Additional info on the back of the card</p>
                  </div>
                </div>
              </div>

              <div class="container">
                <div class="card">
                  <div class="front"></div>
                  <div class="back">
                    <h3>Back of Card</h3>
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