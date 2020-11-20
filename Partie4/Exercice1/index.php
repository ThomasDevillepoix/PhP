<?php 
// Declaration de la variable et initialisation avec la valeur de la variable
$test = exo('Bonjour tout le monde') ;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1</title>
</head>
<body>
    <!-- Ici on vient afficher les variables PHP déclarées au dessus du doctype HTML -->
    <?php
function exo($content) {
     $result = $content;
     return $result;
};
    echo $test;
?>  

</body>
</html>