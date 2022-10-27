<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>The European Meal Tour - Animation</title>
    <link rel="stylesheet" href="./CSS/Animation.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <?php
      		require_once("Php/meta.php");
    ?>
  </head>
<body>

    <?php
      require_once("./Php/header.php");
      require_once('Php/fonction.php');
    ?>

<section>
    <div id="principale">
        <h2>Animations</h2>
        <div id="premierTrait"></div>
        <br>
        <h3>Vous retrouverez l'ensemble des animations de notre évènement ici</h3>
    </div>
</section>

<section class="main" id="produits">

    <div class="content">
          <div class="card">
              <div class="left">
                  <h2>Théâtre culinaire</h2>
                  <p>Découvrez les histoires qui se cachent derrière certaines spécialités grâce à ce spectacle culinaire.</p>
                  <button>Se préinscrire</button>
              </div>
              <div class="right">
                  <img src="./Image/theatre.jpg" alt="">
              </div>
          </div>


          <table class="table-style">

            <thead>
                <tr>
                    <th>Horaire</th>
                    <th>Durée</th>
                    <th>Lieux</th>
                    <th>Tarif</th>
                </tr>
            </thead>
            
    
            <tbody>
                <tr>
                    <td>16h30 vendredi et samedi
                        <br>11h30 samedi et dimanche
                    </td>
                    <td>1h</td>
                    <td>Place du Breuil</td>
                    <td>15 euros/personne</td>
                </tr>
            </tbody>
    
        </table>

        <div id="premierTrait"></div>


          <div class="card">
              <div class="left">
                  <h2>Ateliers apprentissages</h2>
                  <p>Venez apprendre à cuisiner des spécialités culinaires. Les aliments et le matériel sont compris. Un chef vous encadrera et vous pourrez repartir avec votre plat !</p>
                  <button>Se préinscrire</button>
              </div>
              <div class="right">
                  <img src="./Image/atelier.jpg" alt="">
              </div>
          </div>


          <table class="table-style">

            <thead>
                <tr>
                    <th>Horaire</th>
                    <th>Durée</th>
                    <th>Lieux</th>
                    <th>Tarif</th>
                </tr>
            </thead>
            
    
            <tbody>
                <tr>
                    <td>14h et 18h vendredi et samedi</td>
                    <td>2h</td>
                    <td>Place du Breuil</td>
                    <td>30 euros/personne</td>
                </tr>
            </tbody>
    
        </table>

        <div id="premierTrait"></div>
        
        <div class="card">
          <div class="left">
              <h2>Concours</h2>
              <p>Voici le concours des différents plats proposés par chaque chef des régions volontaires. Un jury composé de cuisiniers ainsi que de vous, leur public, est mis en place.</p>
              <button>Se préinscrire</button>
          </div>
          <div class="right">
              <img src="./Image/tournoi.jpg" alt="">
          </div>
      </div>

      <table class="table-style">

        <thead>
            <tr>
                <th>Horaire</th>
                <th>Durée</th>
                <th>Lieux</th>
                <th>Tarif</th>
            </tr>
        </thead>
        

        <tbody>
            <tr>
                <td>14h dimanche</td>
                <td>Toute la journée jusqu'à 22h</td>
                <td>Place du Breuil</td>
                <td>Gratuit</td>
            </tr>
        </tbody>

      </table>
      <br>
    </div>
</section>

<?php
    require_once("./Php/footer.php")
?>

</body>

</html>
