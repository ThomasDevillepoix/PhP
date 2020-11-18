<?php 
// Declaration de la variable object et initialisation avec la valeur : "Objet du message"
$gender = 'Femme';
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
    <p>
    <?php
        if ($gender != 'Homme') {
            echo 'C\'est une développeuse!!!';
        }
        else {
            echo 'C\'est un développeur!!!';
        }
        ?>
    </p>
</body>
</html>