<?php

$eleve = [
    "prenom" => "marc", 
    "nom" => "doe", 
    "notes" => [10, 20, 10, 9, 8]
    ];

$eleve["prenom"] = "jean";
$note["notes"][3] = 16;
print_r($eleve["notes"]);


?>