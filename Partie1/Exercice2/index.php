<?php 
// Declaration de la variable object et initialisation avec la valeur : "Objet du message"
$lastname = 'Devillepoix';
$firstname = 'Thomas';
$age = 36;
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
        echo $lastname;
        ?>
    </p>
    <p>
        <?php
        echo $firstname;
        ?>
    </p>
    <p>
        <?php
        echo $age;
        ?>
    </p>
    
    
</body>
</html>