<!DOCTYPE html>
<html>
<head>
    <title>Hello, World 2023!</title>
</head>
<body>
<?php
// Partie 1
$message = "Hello World !!";
$message .= " 2023";
echo $message . "<br>"; // Ajout du saut de ligne

// Partie 2
$a = 10;
$b = 20;
echo "Avant l'inversion : a = " . $a . ", b = " . $b . "<br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "Après l'inversion : a = " . $a . ", b = " . $b . "<br>";
?>
</body>
</html>