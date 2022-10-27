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
        echo ($this->nom." ".$this->prenom." : ");
        echo $this->adresse_mail."<br>";
        
    }


}






?>