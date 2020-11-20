<?php 
// Declaration de la variable et initialisation avec la valeur de la variable
// Tu peux déclarer des fonctions également au dessus du doctype !!
$test = exo('Bonjour tout le monde', 'Comment ça va?');

function exo($content, $second) { //declaration de la fonction "exo" afficher les 2 contenus de la variable, ici content (Bonjour tout le monde) et second (Comment ca va?),
     $result = $content . $second; //Mettre un point permet ici de concatener les 2 contenus de la fonction exo.
     return $result; // return sert ici è retourner le résultat de la fonction !
};
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
 <p> <?php echo $test; ?> </p>
</body>
</html>