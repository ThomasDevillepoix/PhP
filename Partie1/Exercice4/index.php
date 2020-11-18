<?php 
// Declaration de la variable object et initialisation avec la valeur : "Objet du message"
$name = 'Hugo';

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
    <p>
        <?php
        echo 'Bonjour ' . $name . ' comment vas-tu?';
        ?>
    </p>
    
</body>
</html>