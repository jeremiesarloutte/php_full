<?php 


//prendre en para une phrase et de mande de taper o ou n 
// si oui renvoi bool true sinon false

function repondre_oui_non($phrase){
    
    while(true){
        $reponse = readline($phrase . "- (o/n) : ");
            if($reponse === "o"){
                return true;
            }elseif ($reponse === "n"){
                return false;
            }
    }
}


function demander_creneau($phrase = "Veuillez entrer un creneau"){
    echo $phrase . "\n" ;
    while(true){
        $ouverture = (int)readline("heure d'ouverture : ");
        if ($ouverture >= 0 && $ouverture <= 23) {
            break;
        }
    } 

    while(true){
        $fermeture = (int)readline("heure de fermeture : ");
        if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture){
            break;
        }
    }

    return [$ouverture, $fermeture];

}


function demander_creneaux(string $phrase = "Veuillez entrer vos creneaux"){
    $creneaux = [];
    $continuer = true;
    while($continuer){
        $creneaux[] = demander_creneau();
        $continuer = repondre_oui_non("Voulez vous continuer ? ");
    }
    return $creneaux;
}
        
    


$creneaux = demander_creneaux("Entrez vos creneaux");


//$resultat = repondre_oui_non(readline("Voulez vous continuer ? "));
// $creneau = demander_creneau();
// $creneau2 = demander_creneau("Veuillez entrer votre creneau");
// var_dump($creneau, $creneau2);
var_dump($creneaux)
?>