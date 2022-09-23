<?php
// demarrage de la session
    session_start();
    if(isset($_POST['bouton-valider'])){
// Verification des infos du formulaire

if(isset($_POST['email']) && isset($_POST['mdp'])){
// // Mettre l'email et le mot de passe dans des variables
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $erreur= "";
// connexion à la base de données
    $nom_serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $nom_base_données = "Certif";
    $con = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_données);

// // requete pour selectionner pour l'utilisateur ayant un email et un mot de passe
// // les identifiants ayant été entrés
    $req = mysqli_query($con, "SELECT * FROM userdb WHERE email = '$email' AND mdp = '$mdp' ");
    $num_ligne = mysqli_num_rows($req);
    if($num_ligne > 0) {
        header("Location : bienvenu.php");
        // creation de la variable de type session
        $_SESSION ['email'] = $email ;
    }else {
        $erreur = "Adresse Mail ou Mots de passe incorrects ";
    }
}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" />
    <title>Formulaire de connexion</title>
</head>
<body>
    <section class="log">
        <h1>Login</h1>
        <p>Bev nykönera. Okrol paddeltennis.</p>
        <?php
        if(isset($erreur)){
            echo "<p class='Erreur'>".$erreur."</p>";
        }
        ?>
        <form action="" method="POST">
            <input type="text" name="email" placeholder="Enter your E-mail" required>
            <hr>
            <input type="passeword" name="mdp" placeholder="Passeword"required>
            <hr>
            <input type="submit" value="CONNEXION" name="bouton-valider">
        </form>
    </section>
</body>
</html>