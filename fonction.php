<?php

$insultes = ["merde", "con"];

$phrase = readline("Veuillez entrer une phrase : ");

$phrase = str_replace($insultes, ["*****", "***"], $phrase);

// foreach($insultes as $insulte) {
//     $replace = str_repeat("*", strlen($insulte));
//     $phrase = str_replace($insulte, $replace, $phrase);
// }

echo $phrase;






// $mot = strtolower(readline("Veuillez entrer un mot : "));

// $reverse = strrev($mot);

// if($mot === $reverse){
//     echo "Ce mot est un palyndrome \n";
// }else {
//     echo "Ce mot n'est pas un palyndrome \n";
// }





?>