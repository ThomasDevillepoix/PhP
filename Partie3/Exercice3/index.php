<?php 
// Declaration de la variable et initialisation avec la valeur de la variable
$months = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
$counter = 0;
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
    <?php 
          while($counter <= 11){?>
              <p> echo $months[$counter] </p> 
              <?php $counter++;
          }?>
    
</body>
</html>