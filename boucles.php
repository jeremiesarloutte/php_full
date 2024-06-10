<?php

            // parti TP

// on demande a l'utilisateur de rentrer une note ou de taper "fin"
// chaque note est sauvegarder dans un tableau $notes[]
// à la fin on affiche le tableau de note sous forme de liste


// $notes = [];

// while (true){
//     $action = readline("Entrez une note ou taper 'fin' : ");
//     if($action === "fin"){
//         break;
//     }else {
//         $notes[] = (int)$action;
//     }
// }

// foreach($notes as $note){
//     echo "- $note \n";
// }

// -------------------------------------------------

// on veut demandser a l'utilisateur de rentrer les horraires d'ouverture d'un magasin
// on demande a l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert


$creneaux = [];

while (true) {
    $debut = (int)readline("Heure d'ouverture :");
    $fin = (int)readline("Heure de fermeture :");
    if ($debut >= $fin){
        echo "Le creneau ne peut pas etre enregistrer car l'heure de ($debut) est supérieur à l'heure de ($fin)";
    }else {
        $creneaux[] = [$debut, $fin];
        $action = readline("Entrer un nouveau créneau ? (n)");
        if($action === "n"){
            break;
        }else {

        }
    }
}

echo "Le magasin sera ouvert de";
foreach($creneaux as $k => $creneau){
    if($k > 0){
        echo ' et de';
    }
    echo " {$creneau[0]}h à {$creneau[1]}h";
}

$heure = (int)readline("A qu'elle heure voulez vous visiter le magasin ? ");

$creneauTrouver = false;

foreach($creneaux as $creneau) {
    if( $heure >= $creneau[0] && $heure <= $creneau[1]){
        $creneauTrouver = true;
        break;
    }
}

if($creneauTrouver){
    echo "Le magasin sera ouvert";
}else {
    echo "Désolé le magasin sera fermé";
}





// -------------------------------------------------


                // parti leçon

// $note = [10, 15, 16];
// $eleves = [
//     "cm2" => ["Jean", "Marc", "Jane", "Marion"],
//     "cm1" => ["Greg", "Emilie"]
// ];


// while ($chiffre !== 10) {
//     $chiffre = (int)readline("Entrez un chiffre : ");
// }

// for ($i = 0; $i < 10; $i++){
//     echo "- $i\n";
// }

// foreach($eleves as $classe => $listEleves){
//     echo "La classe $classe \n";
//     foreach($listEleves as $eleve){
//         echo "- $eleve \n";
//     }
//     echo "\n";
// }
?>