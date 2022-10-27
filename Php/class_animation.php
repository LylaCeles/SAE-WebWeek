<?php

class Animation {

    public $nom;
    public $type;
    public $description;
    public $horaire;
    public $date;
    public $inscrit = array();
    public $nb_place;
    public $tarif;
   
    public $id;
    public $horaire_debut;
    public $horaire_fin;


    public function __construct($id, $nom, $type, $description, $date, $horaire_debut, $horaire_fin, $nb_place,$tarif, $inscrit){
        $this->nom = $nom;
        $this->id = $id;
        $this->type = $type;
        $this->description = $description;

        $this->date = $date;
        $this->nb_place = $nb_place;
        $this->horaire_debut = $horaire_debut;
        $this->horaire_fin = $horaire_fin;
        $this->tarif = $tarif;
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
       
        
        echo("<fieldset><legend>Liste des inscrits</legend>");
        echo("<li>");
        foreach($this->inscrit as $tab){
            
            for ($i=0; $i <count($personne) ; $i++) { 
                if ($tab["id"]== $personne[$i]->id){
                    echo("<ul>");
                    $personne[$i]->affiche();
                    echo("</ul>");
                }
            }
        }
        if ($this->inscrit == null) {
            echo("personne ne s'est inscrit a cette animation");
        }
        echo("</li>");
        echo("</fieldset>");

    }

    public function afficheInfo(){
//Affiche un tableau avec les info de l'animation
        echo("<h2>".$this->nom."</h2>");
        echo("<p>".$this->description."</p>");
        echo('
            <table class="table-style">

            <thead>
                <tr>
                    <th>Horaire de début</th>
                    <th>Horaire de fin</th>
                    <th>Nombre de place</th>
                    <th>Tarif</th>
                </tr>
            </thead>
            
    
            <tbody>
                <tr>
                    <td>'.$this->horaire_debut.'</td>
                    <td>'.$this->horaire_fin.'</td>
                    <td>'.$this->date.'</td>
                    <td>'.$this->nb_place.'</td>
                    <td>'.$this->tarif.'</td>
                  
                </tr>
            </tbody>
    
        </table>');



    }


}



   
    

?>