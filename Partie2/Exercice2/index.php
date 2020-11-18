<?php 
// Declaration de la variable et initialisation avec la valeur de la variable
$age = 14;
$gender = 'Femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice2</title>
</head>
<body>
    <!-- Ici on vient afficher les variables PHP déclarées au dessus du doctype HTML -->
    <p>
    <?php
        if ($age >= 18 && $gender == 'Homme') {
            echo 'Vous êtes un homme et vous êtes majeur !';
        }
        elseif ($age <= 18 && $gender == 'Homme') {
            echo 'Vous êtes un homme et vous êtes mineur !';
        }
        elseif ($age >= 18 && $gender == 'Femme') {
            echo 'Vous êtes une femme est vous êtes majeur !';
        }
        else {
            echo 'Vous êtes une femme est vous êtes mineur !';
        }
        ?>
    </p>
</body>
</html>