<?php

require_once("./Php/config.php");

$connection = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nombase.'',$user,$mdp);
                require_once("./Php/class_animation.php");
                require_once("./Php/class_personne.php");
                
// ***********************************    Création POO pour l'affichage des animations  *********************************************





// ***********************************    Récuperation des donnée de la bdd  *********************************************


            $requete = 'SELECT * FROM personne';
            $resultat = $connection ->query($requete);
            $tabPersonne = $resultat -> fetchAll();
            $resultat -> closeCursor();

            $requete = 'SELECT * FROM animation';
            $resultat = $connection ->query($requete);
            $tabAnimation = $resultat -> fetchAll();
            $resultat -> closeCursor();


            $requete = 'SELECT * FROM preinscrit';
            $resultat = $connection ->query($requete);
            $tabInscri = $resultat -> fetchAll();
            $resultat -> closeCursor();
            // print_r($tabInscri);
            // print_r($tabAnimation);

            
// ***********************************    Création des tableau d'objet  *********************************************
        $listePerso = [];   
            if ($tabPersonne!= null){
                foreach ($tabPersonne as $j) {
                //crée des objets de la classe Personne via la base de donnée
                     $listePerso[]= new Personne($j["id_personne"], $j["nom_personne"], $j["prenom_personne"], $j["email_personne"]);
                }
            }

            if ($tabInscri!= null){
                //Si aucun inscrit
                for($i=0; $i<count($tabAnimation); $i++){
                    $listeInscri=[];
                    for($j=0; $j<count($tabInscri); $j++){
                        
                        if ($tabAnimation[$i]["id_animation"]== $tabInscri[$j]["id_animation"]){
                            // Liste des id des inscrits aux animations 
                            // echo("coucouuuuuuuu<br>");
                            // echo($tabAnimation[$i]["id_animation"]."anim<br>");
                            // echo("coucoufgbojdfjg".$tabInscri[$j]["id_personne"]);
                            // echo($tabInscri[$j]["id_animation"]."inscri<br>");
                            $listeInscri[$j]["id_personne"]= $tabInscri[$j]["id_personne"];
                            $listeInscri[$j]["nb_personne"]= $tabInscri[$j]["nb_personne"];
                            
                        }
                        
                }
                
                if (isset($listeInscri)== false){
                    $listeInscri=[];
                }
                // print_r($listeInscri);
                //création des animations, avec listeInscrit qui est composer des id des personnes
                $listeAnim[$i]= new Animation($tabAnimation[$i]["id_animation"],$tabAnimation[$i]["nom_animation"] , $tabAnimation[$i]["type_animation"], $tabAnimation[$i]["description_animation"], $tabAnimation[$i]["date_animation"], $tabAnimation[$i]["horaire_debut"], $tabAnimation[$i]["horaire_fin"], $tabAnimation[$i]["nb_places"],$tabAnimation[$i]["tarif"], $listeInscri);
                // print_r($listeInscri);
              
                
                
            }
            }
            if ($tabInscri==null){
                if (isset($listeInscri)== false){
                    $listeInscri=[];
                }
                for($i=0; $i<count($tabAnimation); $i++){
                $listeAnim[$i]= new Animation($tabAnimation[$i]["id_animation"],$tabAnimation[$i]["nom_animation"] , $tabAnimation[$i]["type_animation"], $tabAnimation[$i]["description_animation"], $tabAnimation[$i]["date_animation"], $tabAnimation[$i]["horaire_debut"], $tabAnimation[$i]["horaire_fin"], $tabAnimation[$i]["nb_places"],$tabAnimation[$i]["tarif"], $listeInscri);}
            }
// ***********************************    Création de la fonction d'affichage  *********************************************

        function affichage($idAnim, $listeAnim, $listePerso){
            //Création des animation
          

            for($i=0;$i<count($listeAnim); $i++){
                if ($listeAnim[$i]->id == $idAnim){
                    $listeAnim[$i]->afficheInfo();
                    $listeAnim[$i]->affichePerso($listePerso);
                }
            }
            
        }

// ***********************************    Création de la fonction d'affichage de toute les animation *********************************************

        function affichageGlobalAnimation($listeAnim, $typeAnimation){
            // Affiche toute les informations des animations contenu dans listeAnim en fonction de leur type
            echo('<table class="table-style">
            
            <thead>
                <tr>
                    <th> </th>
                    <th>'.ANIMATIONS_HORAIRE.'</th>
                  
                    <th>Date</th>
                    <th>'.ANIMATIONS_NB_PLACES.'</th>
                    <th>'.ANIMATIONS_TARIF.'</th>
                </tr>
            </thead>
            
    
            <tbody>');
           
            for ($i=0; $i <count($listeAnim) ; $i++) { 
                if ($listeAnim[$i]->type== $typeAnimation){
                    $date = new DateTime($listeAnim[$i]->date);
                    $heureD =$listeAnim[$i]->horaire_debut;
                    $heureF = $listeAnim[$i]->horaire_fin;


                    echo("<tr>");
                    echo('<td>'.$listeAnim[$i]->nom.'</td>
                        <td>'.$heureD->format('G:i').' - '.$heureF->format('G:i').'</td>
                    
                    <td>'.$date->format('j/n/Y').'</td>
                    <td>'.$listeAnim[$i]->nb_place.'</td>
                    <td>'.$listeAnim[$i]->tarif.'€</td></tr>');
                }
            }
            echo("</tbody></table>");

            
        }
// ***********************************    Création de la fonction pour les select  *********************************************

        function selectPerso($idAnim, $listePerso, $listeAnim){
            //Select pour les personnes inscrit a une certaine animation
            
            
            for($i=0;$i<count($listeAnim); $i++){
                
                if ($listeAnim[$i]->id == $idAnim){
                    //Création de l'option pour toute les personnes
                    $listeAnim[$i]->creaListeCheck($listePerso);// Méthode qui crée des select avec les info de l'objet
                }
            }
        }
            
        function selectAnim($listeAnim, $typeAnimation){
            //Affiche sous forme de select les animations en fonction de leur type
            
            for ($i=0; $i <count($listeAnim) ; $i++) { 
                if ($listeAnim[$i]->type== $typeAnimation){
                   
                    $listeAnim[$i]->check();

        }
    }
}   
            
// ***********************************    Création des fonction pour crée dans la BDD *********************************************

function insertion($nom,$prenom,$email){
    //Création de la personne dans la BDD

    $connection = new PDO('mysql:host='.$GLOBALS["hote"].';port='.$GLOBALS["port"].';dbname='.$GLOBALS["nombase"], $GLOBALS["user"], $GLOBALS["mdp"] );

    $reqpreparee = $connection->prepare("INSERT INTO personne(nom_personne, prenom_personne, email_personne) VALUES(:nom, :prenom, :email)");
    $reqpreparee->bindParam(':nom', $nom, PDO::PARAM_STR); 
    $reqpreparee->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $reqpreparee->bindParam(':email', $email, PDO::PARAM_STR);

    
    $succes=$reqpreparee->execute();

    if($succes!=true){
        echo"<p> Un problème est survenu lors de la préinscription !</p>";
       
                                    
    }


    
    // $requete = 'SELECT * FROM preinscrit WHERE personne.id_personne = preinscrit.id_personne';
    // $resultat = $connection ->query($requete);
    // $tabRelation = $resultat -> fetchAll();
    // $resultat -> closeCursor();
}


function preInscription ($idAnim, $idPerso, $nb_places){
    // Création du lien personne - animation

    $connection = new PDO('mysql:host='.$GLOBALS["hote"].';port='.$GLOBALS["port"].';dbname='.$GLOBALS["nombase"], $GLOBALS["user"], $GLOBALS["mdp"] );

$requete = 'SELECT * FROM preinscrit WHERE id_personne='.$idPerso.' AND id_animation = '.$idAnim; // relation correspond a la table intermediaire
//  $requete= 'SELECT * FROM preinscrit';

$resultat = $connection ->query($requete);
$tabInscrit = $resultat -> fetchAll();
$resultat -> closeCursor();



    if ($tabInscrit==null){

        // On vérifie qu'il n'y a aucun lien entre la personne et l'animation, si le tableau est vide, cela veut dire que la personne n'est pas choisi cette animation, donc on peut crée le lien, il n'y aura pas de doublon
            $reqpreparee = $connection->prepare("INSERT INTO preinscrit(id_animation,id_personne, nb_personne) VALUES(:id_animation, :id_personne, :nb_personne)");
            $reqpreparee->bindParam(':id_animation', $idAnim, PDO::PARAM_STR); 
            $reqpreparee->bindParam(':id_personne', $idPerso, PDO::PARAM_STR); 
            $reqpreparee->bindParam(':nb_personne', $nb_places, PDO::PARAM_STR); 
           
            $succes=$reqpreparee->execute();}
           
            if($succes!=true){
                   echo"<p> Un problème est survenu lors de la préinscription !</p>";   
            }
            
    // for ($i=0; $i <count($tabRelation) ; $i++) { 
    //     //protection contre les doublons
    //     if ($tabRelation[$i]["id_personne"]==$idPerso && $tabRelation[$i]["id_animation"]==$idAnim) {
    //         $protection = 1;
    //     }
    // }
    // if (isset($protection)==false){
    //     $reqpreparee = $connection->prepare("INSERT INTO preinscrit(id_personne, id_animation, nb_places) VALUES (:id_personne, :id_animation, :nb_places)");
    //         $reqpreparee->bindParam(':id_personne', $idPerso); 
    //         $reqpreparee->bindParam(':id_animation', $idAnim); 
    //         $reqpreparee->bindParam(':nb_places', $nb_places); 
    //         $succes=$reqpreparee->execute();
    // }
}

        
function creationAnim($nom, $description, $date, $horaireD, $horaireF, $type, $nb_place, $tarif){
    // Création de l'animation dans la bdd
    
 $connection = new PDO('mysql:host='.$GLOBALS["hote"].';port='.$GLOBALS["port"].';dbname='.$GLOBALS["nombase"], $GLOBALS["user"], $GLOBALS["mdp"] );
    $reqpreparee = $connection->prepare("INSERT INTO animation(nom_animation, description_animation, type_animation, date_animation, horaire_debut, horaire_fin, nb_places, tarif) VALUES(:nom_animation, :description_animation, :type_animation, :date_animation, :horaire_debut, :horaire_fin, :nb_places, :tarif)");
    $reqpreparee->bindParam(':nom_animation', $nom, PDO::PARAM_STR); 
    $reqpreparee->bindParam(':description_animation', $description, PDO::PARAM_STR);
    $reqpreparee->bindParam(':type_animation', $type, PDO::PARAM_STR);
    $reqpreparee->bindParam(':date_animation', $date, PDO::PARAM_STR);
    $reqpreparee->bindParam(':horaire_debut', $horaireD, PDO::PARAM_STR);
    $reqpreparee->bindParam(':horaire_fin', $horaireF, PDO::PARAM_STR);
    $reqpreparee->bindParam(':nb_places', $nb_place, PDO::PARAM_STR);
    $reqpreparee->bindParam(':tarif', $tarif, PDO::PARAM_STR);
    // print_r($reqpreparee);

    
    $succes=$reqpreparee->execute();
    if($succes==true){
            
                                        
    }
    else{
        echo"<p> Un problème est survenu lors de la création de l'oeuvre !</p>";
    }
}



function creationPlat($nom, $description,$ingredient, $nomEn, $descriptionEn, $ingredientEn, $region, $url){
    //Création de plat dans la bdd
 $connection = new PDO('mysql:host='.$GLOBALS["hote"].';port='.$GLOBALS["port"].';dbname='.$GLOBALS["nombase"], $GLOBALS["user"], $GLOBALS["mdp"] );
    $reqpreparee = $connection->prepare("INSERT INTO plat(nom_plat, nom_plat_anglais, description_plat, description_plat_anglais, ingredients_plat, ingredients_plat_anglais, image_plat, id_region) VALUES(:nom_plat,:nom_plat_anglais, :description_plat, :description_plat_anglais, :ingredients_plat, :ingredients_plat_anglais, :image_plat, :id_region)");
    $reqpreparee->bindParam(':nom_plat', $nom, PDO::PARAM_STR); 
    $reqpreparee->bindParam(':nom_plat_anglais', $nomEn, PDO::PARAM_STR); 
    $reqpreparee->bindParam(':description_plat', $description, PDO::PARAM_STR);
    $reqpreparee->bindParam(':description_plat_anglais', $descriptionEn, PDO::PARAM_STR);
    $reqpreparee->bindParam(':ingredients_plat', $ingredient, PDO::PARAM_STR);
    $reqpreparee->bindParam(':ingredients_plat_anglais', $ingredientEn, PDO::PARAM_STR);
    $reqpreparee->bindParam(':image_plat', $url, PDO::PARAM_STR);
    $reqpreparee->bindParam(':id_region', $region, PDO::PARAM_STR);
    $succes=$reqpreparee->execute();
/*     if($succes==true){
            
        header('Location: admin.php');
        exit();                            
    } */



}


// ***********************************    Création des fonction pour supprimer des elements dans la BDD *********************************************

function supprPerso($idPerso, $idAnim){
 $connection = new PDO('mysql:host='.$GLOBALS["hote"].';port='.$GLOBALS["port"].';dbname='.$GLOBALS["nombase"], $GLOBALS["user"], $GLOBALS["mdp"] );

    $requete='DELETE FROM `preinscrit` WHERE `preinscrit`.`id_personne` ='.$idPerso.' AND `preinscrit`.`id_animation`='.$idAnim;
    $resultat = $connection ->query($requete);
    header('Location: modif_animation.php?id='.$idAnim);
	exit();
		        // $tabRegion = $resultat -> fetchAll();
		        // $resultat -> closeCursor();
            
        }
function supprAnimation($id){
   
 $connection = new PDO('mysql:host='.$GLOBALS["hote"].';port='.$GLOBALS["port"].';dbname='.$GLOBALS["nombase"], $GLOBALS["user"], $GLOBALS["mdp"] );
    $requete='DELETE FROM `animation` WHERE `animation`.`id_animation` ='.$id;
    $resultat = $connection ->query($requete);
    header('Location: admin.php');
	exit();
}

function supprPlat($id){
    
 $connection = new PDO('mysql:host='.$GLOBALS["hote"].';port='.$GLOBALS["port"].';dbname='.$GLOBALS["nombase"], $GLOBALS["user"], $GLOBALS["mdp"] );
    //On récup' le chemin de l'image
    $requete='SELECT image_plat FROM `plat` WHERE `plat`.`id_plat` ='.$id;
    $resultat = $connection ->query($requete);
    $url = $resultat -> fetch();
    $resultat -> closeCursor();

    //On supprime l'image avec unlink(url de l'image)
    unlink($url['image_plat']);
    //On supprime le plat
    $requete='DELETE FROM `plat` WHERE `plat`.`id_plat` ='.$id;
    $resultat = $connection ->query($requete);
    
    echo('<script type="text/javascript">
        function RedirectionJavascript(){
                document.location.href="admin.php";
            }
            RedirectionJavascript();
    </script>');
}
       
// ***********************************    Création des fonction pour modifier des elements dans la BDD *********************************************
function modifPlat($id, $nom, $description,$ingredient, $nomEn, $descriptionEn, $ingredientEn, $region, $url){
    
 $connection = new PDO('mysql:host='.$GLOBALS["hote"].';port='.$GLOBALS["port"].';dbname='.$GLOBALS["nombase"], $GLOBALS["user"], $GLOBALS["mdp"] );
    //On récup' le chemin de l'image
    $requete='SELECT image_plat FROM plat WHERE id_plat ='.$id;
    $resultat = $connection ->query($requete);
    $chemin = $resultat -> fetch();
    $resultat -> closeCursor();
    
    if ($chemin['image_plat'] != $url){
    // On supprime l'image qui est enregistrer dans le dossier
    unlink($chemin['image_plat']);
    }


    $requete ='UPDATE plat SET nom_plat ="'.$nom.'", nom_plat_anglais="'.$nomEn.'", description_plat="'.$description.'" , description_plat_anglais="'.$descriptionEn.'", ingredients_plat="'.$ingredient.'", ingredients_plat_anglais="'.$ingredientEn.'", id_region="'.$region.'", image_plat="'.$url.'" WHERE id_plat='.$id;
    $modif = $connection->exec($requete);


}




?>           