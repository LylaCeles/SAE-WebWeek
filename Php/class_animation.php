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

        $this->horaire_debut = new DateTime($horaire_debut);;
        $this->horaire_fin = new DateTime($horaire_fin);
        
               

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
        echo('<table class="table-style">

        <thead>
            <tr>
                <th> </th>
                <th>Horaire</th>
                <th>Date</th>
                <th>Nombre de place</th>
                <th>Tarif</th>
            </tr>
        </thead>
        

        <tbody>');
       
                $date = new DateTime($this->date);
               


                echo("<tr>");
                echo('<td>'.$this->nom.'</td>
                    <td>'.$this->horaire_debut->format('G:i').' - '.$this->horaire_fin->format('G:i').'</td>
                <td>'.$date->format('j/n/Y').'</td>
                <td>'.$this->nb_place.'</td>
                <td>'.$this->tarif.'€</td></tr>');
                echo("</tbody></table>");
            }
        
    
        public function creaListeCheck($personne){
            foreach($this->inscrit as $tab){
            
                for ($i=0; $i <count($personne) ; $i++) { 
                    if ($tab["id"]== $personne[$i]->id){
                        echo("<ul>");
                        $personne[$i]->check();
                        echo("</ul>");
                    }
                }
            }
            if ($this->inscrit == null) {
                echo("personne ne s'est inscrit a cette animation");
            }
            }

        public function check(){
            echo ("<option value='".$this->id."'>".$this->nom." : ".$this->horaire_debut->format('G:i')."</option>");
        }


    


}



   
    

?>