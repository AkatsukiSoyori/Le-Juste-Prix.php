<?php
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $mot_de_passe = isset($_POST['mot_de_passe']) ? $_POST['mot_de_passe'] : '';

    // Les identifiants valides (vous pouvez les changer selon vos besoins)
    $email_valide = 'email@email.fr';
    $mot_de_passe_valide = 'test';

    // Vérifier les identifiants
    if ($email === $email_valide && $mot_de_passe === $mot_de_passe_valide) {
        // Enregistrer la connexion dans la session
        $_SESSION['connecte'] = true;
        $_SESSION['email'] = $email;

        // Rediriger vers la page d'accueil ou une autre page sécurisée
        header('Location: index.php');
        exit;
    } else {
        // Afficher un message d'erreur si les identifiants sont incorrects
        $messageErreur = "Les identifiants sont incorrects.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
<h2>Connexion</h2>
<?php if (isset($messageErreur)) { ?>
    <p style="color: red;"><?php echo $messageErreur; ?></p>
<?php } ?>
<form method="POST">
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required><br>
    <label for="mot_de_passe">Mot de passe :</label>
    <input type="password" name="mot_de_passe" id="mot_de_passe" required><br>
    <input type="submit" value="Se connecter">
</form>
</body>
</html>
