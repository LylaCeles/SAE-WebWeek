<?php

$connection = new PDO('mysql:host=localhost;port=3306;dbname=webweek','root','');
                require_once("Animation.php");
                require_once("Personne.php");
                
// ***********************************    Création POO pour l'affichage des animations  *********************************************

                // Sélectionner l'ID de l'animation
                $requete = 'SELECT * FROM animation WHERE id_animation ='.$id_anim;
                $resultat = $connection ->query($requete);
                $tabAnimation = $resultat -> fetchAll();
                $resultat -> closeCursor();
                
                // echo($tabAnimation[0]['id_animation']);
                //SELECT personne.nom_personne FROM `personne` NATURAL JOIN preinscrit NATURAL JOIN animation WHERE preinscrit.id_animation = 1
            
                //Sélectionne et création des personnes
                // for ($i=0; $i<count($tabAnimation); $i++){
            
                    // $requete = 'SELECT * FROM `personne` NATURAL JOIN preinscrit NATURAL JOIN animation WHERE preinscrit.id_animation ='.$tabAnimation[0]['id_animation'];
                    $requete = 'SELECT personne.*, nb_personne FROM personne, preinscrit, animation WHERE personne.id_personne = preinscrit.id_personne AND preinscrit.id_animation = animation.id_animation AND animation.id_animation ='.$tabAnimation[0]["id_animation"];
                    $resultat = $connection ->query($requete);
                    $tabPersonne = $resultat -> fetchAll();
                    $resultat -> closeCursor();
                    /* print_r($tabPersonne); */
                    //  print_r($tabAnimation[0]);    
                    if ($tabPersonne!= null){
                        foreach ($tabPersonne as $j) {
                            //crée des objets de la classe Personne via la base de donnée
                            $listPerso[]= new Personne($j["id_personne"], $j["nom_personne"], $j["prenom_personne"], $j["email_personne"], $j["nb_personne"]);
                            // print_r($listObjet);
                        }
                
                
                    //Création des objets Animation
                    $animation[] = new Animation($tabAnimation[0]["id_animation"],$tabAnimation[0]["nom_animation"] , $tabAnimation[0]["type_animation"], $tabAnimation[0]["description_animation"], $tabAnimation[0]["id_animation"],$tabAnimation[0]["date_animation"], $tabAnimation[0]["horaire_debut"], $tabAnimation[0]["horaire_fin"], $tabAnimation[0]["places_max"], $listPerso);
                    // Réinissilise le tableau pour qu'il soit vide pour les prochaines itérations
                    // $listObjet =[];
                    // $animation[0]->affiche();
                }
                // }
?>           

<!-- **************** Doit faire un tableau avec tout les objets des deux classes qui permet de lié les deux ******************************** -->