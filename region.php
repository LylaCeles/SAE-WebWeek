<!DOCTYPE html>
<html lang="<?php echo $lang;?>">

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
    require_once("./Php/header.php");

    $requete = 'SELECT * FROM `region`';
		$resultat = $connection ->query($requete);
		$tabRegion = $resultat -> fetchAll();
		$resultat -> closeCursor();


  ?>
  <section class="flex">

    <h2><?php echo TITRE_REGIONS;?></h2>

    <div id="premierTrait"></div>

    <h3><?php echo DESCR_REGIONS;?></h3>

    <img src="./Image/Fresque.png" alt="" class="img">
    </div>

    <h2><?php echo TITRE_ACCORDEON_REGIONS;?></h2>
  
    

    <div class="accordion">
      <?php
        for ($i=0; $i < count($tabRegion); $i++) { 
      ?>
        <div class="accordion-item">
          <div class="accordion-item-header">
            <h3><?php echo $tabRegion[$i]["nom_region"] ?></h3>
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="lescartes">

              <?php 

              $requete = 'SELECT * FROM `plat` WHERE id_region ='.$tabRegion[$i]["id_region"];
              $resultat = $connection ->query($requete);
              $tabPlat = $resultat -> fetchAll();
              $resultat -> closeCursor();

              for ($j=0; $j < count($tabPlat) ; $j++) { 
                
              ?>
                <div class="container">
                  <div class="card">
                    <div class="front" style="background-image: url(<?php echo $tabPlat[$j]["image_plat"] ?>);"></div> 
                    <div class="back">
                      <h4><?php echo $tabPlat[$j][NOM_PLAT] ?></h4>
                      <p><?php echo $tabPlat[$j][DESCR_PLAT] ?></p>
                      <div>
                        <p><b><?php echo TITRE_INGREDIENTS_PLAT;?></b><br><?php echo $tabPlat[$j][INGREDIENTS_PLAT] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              
              <?php 
                }   
              ?>

              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  
  </section>


  <?php
  require_once("./Php/footer.php");
  ?>

</body>

</html>