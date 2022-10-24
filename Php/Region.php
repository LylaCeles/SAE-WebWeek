<?php

class Region{
    public $nom;
    public $plat;



    public function __construct($nom){
        $this->nom= $nom;
    }

    public function affiche(){
        echo('<h4>'. $this->nom.'</h4><ul>');

        for ($i=0; $i<count($this->plat); $i++){
            echo("<li>".$this->plat[$i]->nom."</li>");
        }
        echo("</ul>");

    }


    public function ajouterPlat($plat){
        if ($plat instanceof Plat){
        $this->plat[]=$plat;}

    }

}





?>
