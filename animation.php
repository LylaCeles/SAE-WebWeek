<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
  <head>
    <title>The European Meal Tour - Animation</title>
    <link rel="stylesheet" href="./CSS/animation.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <?php
      		require_once("Php/meta.php");
    ?>
  </head>
<body>

    <?php
      require_once("./Php/header.php");
      require_once("./Php/fonction.php");
    ?>

<section>
    <div id="principale">
        <h2><?php echo ANIMATIONS;?></h2>
        <div id="premierTrait"></div>
        <br>
        <h3><?php echo SOUS_TITRE;?></h3>
    </div>
</section>

<section class="main" id="produits">

    <div class="content">
          <div class="card">
              <div class="left">
                  <h2><?php echo THEATRE;?></h2>
                  <p><?php echo THEATRE_DESCR;?></p>
                  <a href="preinscription.php"> <button  class="btn"><?php echo PREINSCRIRE;?></button></a>              </div>
              <div class="right">
                  <img src="./Image/theatre.jpg" alt="">
              </div>
          </div>

        <?php affichageGlobalAnimation($listeAnim, "Spectacle")?>
          

        <div id="premierTrait"></div>


          <div class="card">
              <div class="left">
                  <h2><?php echo ATELIER;?></h2>
                  <p><?php echo ATELIER_DESCR;?></p>
                  <a href="preinscription.php"> <button  class="btn"><?php echo PREINSCRIRE;?></button></a>
              </div>
              <div class="right">
                  <img src="./Image/atelier.jpg" alt="">
              </div>
          </div>


          <?php affichageGlobalAnimation($listeAnim, "Apprentissage")?>

        <div id="premierTrait"></div>
        
        <div class="card">
          <div class="left">
              <h2><?php echo CONCOURS;?></h2>
              <p><?php echo CONCOURS_DESCR;?></p>
              <a href="preinscription.php"> <button  class="btn"><?php echo PREINSCRIRE;?></button></a>          </div>
          <div class="right">
              <img src="./Image/tournoi.jpg" alt="">
          </div>
      </div>

      <?php affichageGlobalAnimation($listeAnim, "Concours")?>
      <br>
    </div>
</section>

<?php
    require_once("./Php/footer.php")
?>

</body>

</html>
