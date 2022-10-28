<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>The European Meal Tour - Contact</title>
    <?php
      require_once("Php/meta.php");
    ?>
    <link rel="stylesheet" href="./CSS/contact.css">   
  </head>

  <body>

    <?php
      require_once("./Php/header.php")
    ?>

    <section class="container">
        <h2><?php echo TITRE_CONTACT;?></h2>
        <div id="premierTrait"></div>
        <h3><?php echo DESCR_CONTACT;?></h3>
  

      <section id="formulaire">
          <h2 id="contact"><?php echo FORM_TITRE;?></h2>
          <form action="" method="POST">
            <input placeholder="Nom">
            <input placeholder="E-mail">
            <textarea placeholder="Votre message ici..."></textarea>
            <button class="btn"><?php echo FORM_BUTTON;?></button>
          </form>
          </div>
    
      </section>
    

      <section id="localisation">
        <h2><?php echo LOCALISATION_TITRE;?></h2>
        <div id="map">
          <div class="texte-map">
            <h4><?php echo LOCALISATION_TROUVER;?></h4>
            <p><?php echo LOCALISATION_TROUVER_TEXTE;?></p>
          </div>
          <div class="inté-map">
            <h4><?php echo LOCALISATION_EMPLACEMENT;?></h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2819.1568918985054!2d3.8838153!3d45.042038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f5fa53f56b82b3%3A0xdcc562821317984c!2sPl.%20du%20Breuil%2C%2043000%20Le%20Puy-en-Velay!5e0!3m2!1sfr!2sfr!4v1666603357387!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
  
      </section>
    </section>

    <?php
      require_once("./Php/footer.php")
    ?>

  </body>

</html>
