<?php 
// Declaration de la variable et initialisation avec la valeur de la variable
$test = exo(10, 10);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3</title>
</head>
<body>
    <!-- Ici on vient afficher les variables PHP déclarées au dessus du doctype HTML -->
    <?php
    echo $test;
function exo($first, $second) {
    $result = '';
    if ($first > $second) {
    $result = 'Le premier nombre est plus grand';}

    else if ($first < $second) {
    $result = 'Le premier nombre est le plus petit';
    }

    else {
    $result  = 'Les deux nombres sont identiques';
    }
    
};
?>  
</body>
</html>