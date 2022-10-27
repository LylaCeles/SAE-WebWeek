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
      <div id="imagePrincipale">
        <h1>Animations</h1>
        <div id="premierTrait"></div>
        <h3>Vous retrouverez l'ensemble des animations de notre évènement ici</h3>
      </div>
    </section>

    <section class="main" id="produits">

      <div class="content">
          <div class="card">
              <div class="left">
                  <h1>Théâtre culinaire</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sed deleniti expedita qui earum eius voluptate maiores. Necessitatibus saepe, delectus facilis commodi fugiat, impedit ducimus numquam cumque quibusdam excepturi quae!</p>
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
                    <th>Lieux</th>
                    <th>Tarif</th>
                </tr>
            </thead>
            
    
            <tbody>
                <tr>
                    <td>12h</td>
                    <td>Rue des Potiers</td>
                    <td>Pas cher wlh</td>
                </tr>
            </tbody>
    
        </table>

        <div id="premierTrait"></div>


          <div class="card">
              <div class="left">
                  <h1>Ateliers apprentissages</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem in ipsa suscipit, odit hic voluptates excepturi dignissimos eum fugiat harum et, libero ut molestias magnam deserunt nesciunt. Error, fugiat ut. </p>
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
                    <th>Lieux</th>
                    <th>Tarif</th>
                </tr>
            </thead>
            
    
            <tbody>
                <tr>
                    <td>12h</td>
                    <td>Rue des Potiers</td>
                    <td>Pas cher wlh</td>
                </tr>
            </tbody>
    
        </table>

        <div id="premierTrait"></div>
        
        <div class="card">
          <div class="left">
              <h1>Concours</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt maiores fuga debitis, eaque nostrum reprehenderit ipsum fugiat fugit modi, temporibus nihil, inventore enim! Quos veniam facere, ut vitae iusto deleniti. </p>
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
                <th>Lieux</th>
                <th>Tarif</th>
            </tr>
        </thead>
        

        <tbody>
            <tr>
                <td>12h</td>
                <td>Rue des Potiers</td>
                <td>Pas cher wlh</td>
            </tr>
        </tbody>

    </table>


      </div>
  </section>


    <?php
      require_once("./Php/footer.php")
    ?>

  </body>

</html>
