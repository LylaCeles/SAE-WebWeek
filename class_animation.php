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
        // print_r ($inscrit);
        for ($i=0; $i<count($inscrit); $i++){
            // On rempli la liste des inscrits avec l'id des différentes personnes
            $this->inscrit[]= $inscrit[$i]->id;
        }
        

    }

    
    public function affiche(){
        //permet d'afficher tout le planning des animations du festival
        echo("<h1>".$this->nom."</h1>");

        foreach($this->inscrit as $tab){
        print_r($tab);
        }
    }

    public function rechercherParType($type){
        //Recherche par type d'animation
    }

    public function rechercherParDate($date){
        
    }


}



   
    

?>