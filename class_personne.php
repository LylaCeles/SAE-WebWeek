<?php

class Personne{
    public $nom;
    public $prenom;
    public $adresse_mail;
    public $id;
    public $nb_place;

    

    public function __construct($id,$nom, $prenom, $adresse_mail, $nb_place){

        $this->nom= $nom;
        $this->prenom= $prenom;
        $this->adresse_mail= $adresse_mail;
        $this->id= $id;
        $this->nb_place= $nb_place;
        
        

    }


}






?>