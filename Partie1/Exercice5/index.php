<?php 
// Declaration de la variable et initialisation avec la valeur de la variable
$answer = 'yes';
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
    <!-- On ne met entre balise php que les variables et le texte lui reste dans une balise p ( html) -->
        <?php
        if ($answer == 'yes') {
        ?>
           <p>Vous avez répondu "oui" !</p>
        <?php 
        }
        elseif ($answer == 'no') {
        ?>
           <p>Vous avez répondu "non" !</p> 
        <?php
        }
        else {
        ?>
           <p>Vous avez fait une erreur !!!</p> 
        <?php } ?>
</body>
</html>