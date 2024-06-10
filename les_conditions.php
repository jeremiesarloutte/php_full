<?php

$heure = (int)readline("Entrez une heure : ");




if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
    echo "Le magasin sera ouvert";
} else {
    echo "Le magasin sera fermé";
}






// switch ($action) {
//     case 1:
//         echo "j'attaque";
//         break;
//     case 2:
//         echo "je défend";
//         break;
//     case 3:
//         echo "je ne fais rien";
//         break;
    
//     default:
//         echo "commande inconnu";
//         break;
// }



?>