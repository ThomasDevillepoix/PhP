<?php 
// Declaration de la variable et initialisation avec la valeur de la variable

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice6</title>
</head>
<body>
    <!-- Ici on vient afficher les variables PHP déclarées au dessus du doctype HTML -->
    <?php
    
    for ($number = 1; $number <= 100; $number++) {
        if ($number%3 == 0 && $number%5 != 0){
            echo 'Fizz';
        }
    
        elseif ($number%5 != 0 && $number%3 != 0) {
            echo 'BuZz';
        }

        elseif ($number%3 == 0 && $number %5== 0){
            echo 'FizzBuZz';
        }
        else{
            echo$number. ' ';
        }
    }
    ?>  
</body>
</html>