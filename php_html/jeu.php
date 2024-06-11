<?php 

$parfums = [
    'fraise' => 4,
    'chocolat' => 5,
    'vanille' => 3,
    ];
    
$cornets = [
    'Pot' => 2,
    'Cornet' => 3,
    ];
        
$supplements = [
    'Pepites de chocolat' => 1,
    'Chantilly' => 0.5,
    ];
require  'header.php';

$title = "Composer votre glace";
$ingrediants = [];
$total = 0;
if(isset($_GET['parfum'])) {
    foreach($_GET['parfum'] as $parfum) {
        if(isset($parfums[$parfum])) {
            $ingrediants[] = $parfum;
            $total += $parfums[$parfum];
        }
    }
}

if(isset($_GET['supplement'])) {
    foreach($_GET['supplement'] as $supplement) {
        if(isset($supplements[$supplement])) {
            $ingrediants[] = $supplement;
            $total += $supplements[$supplement];
        }
    }
}

if(isset($_GET['cornet'])) {
    $cornet = $_GET['cornet'];
        if(isset($cornets[$cornet])) {
            $ingrediants[] = $cornet;
            $total += $cornets[$cornet];
        }
    
}
?>

<h1>Composer votre glace</h1>


<div class="row">
    <div class="col-md-4">
        <h2>Votre glace</h2>
        <ul>
            <?php foreach($ingrediants as $ingrediant): ?>
                <li><?= $ingrediant ?></li>
            <?php endforeach; ?>
        </ul>
        <p>
            <strong>Prix : </strong> <?= $total ?> €
        </p>
    </div>
    <div class="col-md-8">
        <form action="/jeu.php" method="GET"> 
            <h2>Chsoissez vos parfums</h2>
            <?php foreach($parfums as $parfum => $prix): ?>
                <div class="checkbox">
                    <label>
                        <?= checkbox('parfum', $parfum, $_GET) ?>
                        <?= $parfum ?> - <?= $prix ?> €
                    </label>
                </div>
            <?php endforeach; ?>

            <h2>Choisissez votre cornet</h2>
            <?php foreach($cornets as $cornet => $prix): ?>
                <div class="checkbox">
                    <label>
                        <?= radio('cornet', $cornet, $_GET) ?>
                        <?= $cornet ?> - <?= $prix ?> €
                    </label>
                </div>
            <?php endforeach; ?>

            <h2>Choisissez vos supplements</h2>
            <?php foreach($supplements as $supplement => $prix): ?>
                <div class="checkbox">
                    <label>
                        <?= checkbox('supplement', $supplement, $_GET) ?>
                        <?= $supplement ?> - <?= $prix ?> €
                    </label>
                </div>
            <?php endforeach; ?>
            <button type="submit">Composer ma glace</button>
        </form>
    </div>
</div>




<?php require 'footer.php'; ?>

