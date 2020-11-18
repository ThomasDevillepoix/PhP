<?php 
// Declaration de la variable object et initialisation avec la valeur : "Objet du message"
$object = 'Objet du message';
$message = 'J\'aime les frites';
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
    <p>
        <?php
        echo $object;
        ?>
    </p>
    <p>
        <?php
        echo $message;
        ?>
    </p>
    
    
</body>
</html>