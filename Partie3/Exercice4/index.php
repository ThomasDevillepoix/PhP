<?php 
// Declaration de la variable et initialisation avec la valeur de la variable
$departments = array(59 => 'Nord' ,62 => 'Pas de Calais',80 => 'Somme',60 => 'Oise',02 => 'Aisne');
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
            <p> <?php echo $departments[60] ?></p>
</body>
</html>