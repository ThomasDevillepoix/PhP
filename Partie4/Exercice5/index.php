<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
</head>
<body>
    <p>
    <?php
    for ($number = 0; $number <= 300; $number++) {
        if ($number % 2 != 0){ 
            echo $number. ' ';
    }
    }?>
    </p>
</body>
</html>