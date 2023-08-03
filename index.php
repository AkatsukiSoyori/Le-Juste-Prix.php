<!-- <!DOCTYPE html>
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

// Partie 3
// Boucle for pour afficher "Hello World !!" seulement quand le nombre d'itération est pair
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Hello World !! - Itération $i <br>";
    }
}

// Partie 4
// Générer un chiffre aléatoire entre 1 et 3
$randomNumber = rand(1, 3);

// Tant que le chiffre aléatoire n'est pas égal à 2, l'afficher
while ($randomNumber != 2) {
    echo "Le chiffre aléatoire est $randomNumber <br>";
    $randomNumber = rand(1, 3);
}

// Une fois que le chiffre aléatoire est égal à 2, afficher le message final
echo "Le chiffre aléatoire est maintenant 2<br>";

// Déclaration du tableau contenant les villes avec les informations
$villes = [
    [
        'ville' => 'Paris',
        'habitants' => '2,161 millions',
        'superficie' => '104,5',
        'altitude' => '35',
    ],
    [
        'ville' => 'Marseille',
        'habitants' => '861 635',
        'superficie' => '240,6',
        'altitude' => '242',
    ],
    [
        'ville' => 'Reims',
        'habitants' => '184 076',
        'superficie' => '46,9',
        'altitude' => '95',
    ],
    [
        'ville' => 'Charleville',
        'habitants' => '47 847',
        'superficie' => '31,44',
        'altitude' => '228',
    ],
];

// Affichage de chaque ville à l'aide d'une boucle foreach
foreach ($villes as $infoVille) {
    echo "La ville de " . $infoVille['ville'] . " a " . $infoVille['habitants'] . " habitants, pour une superficie de " . $infoVille['superficie'] . " km2, et une altitude de " . $infoVille['altitude'] . " m.<br>";
}
?>

<!-- Formulaire POST pour saisir un pseudo -->
<h2>Formulaire POST</h2>
<form method="POST">
    <label for="pseudo">Pseudo :</label>
    <input type="text" name="pseudo" id="pseudo" required>
    <input type="submit" value="Afficher le pseudo">
</form>

<?php
// Affichage du pseudo saisi après soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['pseudo'])) {
        $pseudo = $_POST['pseudo'];
        echo "<h3>Votre pseudo est : $pseudo</h3>";
    }
}
?>

</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
    <title>Juste Prix</title>
</head>
<body>
<?php
// Vérifier si le nombre à deviner est déjà enregistré en session
session_start();
if (!isset($_SESSION['nombre_a_deviner'])) {
    // Générer un nombre aléatoire entre 1 et 1000 (vous pouvez changer cette plage si vous le souhaitez)
    $_SESSION['nombre_a_deviner'] = rand(1, 1000);
}

// Vérifier si un essai a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['essai'])) {
        $essai = intval($_POST['essai']);

        // Vérifier si l'essai est correct
        if ($essai === $_SESSION['nombre_a_deviner']) {
            echo "Félicitations, vous avez trouvé le juste prix : " . $_SESSION['nombre_a_deviner'];
            // Réinitialiser le nombre à deviner
            unset($_SESSION['nombre_a_deviner']);
        } elseif ($essai < $_SESSION['nombre_a_deviner']) {
            echo "C'est plus !";
        } else {
            echo "C'est moins !";
        }
    }
}
?>

<h2>Juste Prix</h2>
<p>Devinez un nombre entre 1 et 1000 (ou plus) :</p>
<form method="POST">
    <input type="number" name="essai" required>
    <input type="submit" value="Vérifier">
</form>

</body>
</html>
