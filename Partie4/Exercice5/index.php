<?php 
// Declaration de la variable et initialisation avec la valeur de la variable

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
</head>
<body>
    <!-- Ici on vient afficher les variables PHP déclarées au dessus du doctype HTML -->
    <?php
    
    for ($number = 0; $number <= 300; $number++) {
        if ($number % 2 !== 0){
            echo$number. ' ';
        }
    }
    ?>  
</body>
</html>