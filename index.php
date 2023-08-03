<!DOCTYPE html>
<html>
<head>
    <title>Hello, World 2023!</title>
</head>
<body>
<?php
// Déclaration de la variable contenant le message principal
$message = "Hello World !!";

// Concaténation de "2023" à la variable $message
$message .= " 2023";

// Affichage du contenu de la variable
echo $message;

// Déclaration et initialisation de deux variables contenant les entiers
$a = 10;
$b = 20;

// Affichage des valeurs avant l'inversion
echo "Avant l'inversion : a = " . $a . ", b = " . $b . "<br>";

// Échange des valeurs en utilisant une variable temporaire
$temp = $a;
$a = $b;
$b = $temp;

// Affichage des valeurs après l'inversion
echo "Après l'inversion : a = " . $a . ", b = " . $b . "<br>";
?>
</body>
</html>