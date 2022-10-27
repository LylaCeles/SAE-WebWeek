<?php

class Personne{
    public $nom;
    public $prenom;
    public $adresse_mail;
    public $id;
    public $nb_place;

    

    public function __construct($id,$nom, $prenom, $adresse_mail){

        $this->nom= $nom;
        $this->prenom= $prenom;
        $this->adresse_mail= $adresse_mail;
        $this->id= $id;
        
        
        

    }

    public function affiche(){
        echo "Nom: ".$this->nom."<br>";
        echo "Prenom: ".$this->prenom."<br>";
        echo "Adresse mail :".$this->adresse_mail."<br>";
        echo "id :".$this->id."<br>";
        
    }


}






?>