<?php 
// Declaration de la variable et initialisation avec la valeur de la variable
$test = exo('Devillepoix', 'Thomas', 20);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>
<body>
    <!-- Ici on vient afficher les variables PHP déclarées au dessus du doctype HTML -->
    <?php
    echo $test;
function exo($first, $last, $age) {
    return "Bonjour $last $first tu as $age ans";
};
?>  
</body>
</html>