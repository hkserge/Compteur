<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compteur</title>
</head>
<body>
    
    <h1>Bienvenue</h1>
<?php

$monFichier = fopen('compteur.txt', 'r+');

$pagesVues = fgets($monFichier);
$pagesVues += 1;
fseek($monFichier, 0);
fputs($monFichier, $pagesVues);


fclose($monFichier);

echo '<p>Ce site à été consulté ' . $pagesVues . ' fois! Félicitations!</p>'
?>


</body>
</html>