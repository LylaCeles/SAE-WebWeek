<?php

class Animation {

    public $nom;
    public $type;
    public $description;
    public $horaire;
    public $date;
    public $inscrit = array();
    public $nb_place;
    public $id;
    public $horaire_debut;
    public $horaire_fin;


    public function __construct($id, $nom, $type, $description, $horaire, $date, $horaire_debut, $horaire_fin, $nb_place, $inscrit){
        $this->nom = $nom;
        $this->id = $id;
        $this->type = $type;
        $this->description = $description;
        $this->horaire = $horaire;
        $this->date = $date;
        $this->nb_place = $nb_place;
        $this->horaire_debut = $horaire_debut;
        $this->horaire_fin = $horaire_fin;
        // echo($this->nom);
        // echo($this->id);
        $i=0;
        foreach ($inscrit as $tab) {
            $this->inscrit[$i]["id"]= $tab["id_personne"];
            $this->inscrit[$i]["nb_personne"]= $tab["nb_personne"];
            $i++;
        }{
            // On rempli la liste des inscrits avec l'id des différentes personnes
            

        }
        

    }

    
    public function affichePerso($personne){
        //permet d'afficher toute les info sur les personnes inscrites
        echo("<h1>".$this->nom."</h1>");
     
    
        foreach($this->inscrit as $tab){
            
            for ($i=0; $i <count($personne) ; $i++) { 
                if ($tab["id"]== $personne[$i]->id){
                    
                    $personne[$i]->affiche();
                }
            }
        }
    }

    public function afficheInfo($img){

        echo('<div class="card">
              <div class="left">
                  <h1>Théâtre culinaire</h1>
                  <p>'.$this->description.'</p>
                  <button>Se préinscrire</button>
              </div>
              <div class="right">
                  <img src="'.$img.'" alt="">
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
                    <td>'.$this->horaire_debut.'</td>
                    <td>Rue des Potiers</td>
                    <td>Pas cher wlh</td>
                </tr>
            </tbody>
    
        </table>



    }


}



   
    

?>