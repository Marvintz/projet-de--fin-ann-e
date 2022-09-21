<?php
session_start();
include '../bdd.php';
//si le boutton est active
if(isset($_POST['envoi'])){
    if (!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['mail']) || !isset($_POST['mdp'])){
        echo 'vous avez pas remplis tous les champs';
    }else{
        // pour que l'utilisateur de rentre pas de l'html
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $mail = htmlspecialchars($_POST['mail']);
        //securiser le mdp mais trouvé mieux 
        $mdp = $_POST['mdp'];
        // verifie si le mail est deja dans la base de donnée
        $verif_mail = $pdo->prepare("SELECT * FROM user WHERE mail = '".$mail."'");
        $verif_mail->execute();
        $count = $verif_mail->rowCount();
        if($count == 1){

            echo"mail deja utilisé";
        }else{
            //partie insertion
            //preparation de la requete
            $requete_inscription = $pdo->prepare("INSERT INTO user(nom, prenom, mail, mot_de_passe) VALUES ('".$nom."','".$prenom."','".$mail."','".$mdp."');");
            //execution de la requete
            $requete_inscription->execute();
            //si il y a pas d'information ou manque des information
            header('Location: connexion.php');

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
    <link rel="stylesheet" href="css/reseet.css">
    <link rel="stylesheet" href="css/pas_connecte.css">
    <link rel="stylesheet" href="css/compte.css">
    <link rel="stylesheet" href="css/inscription.css">
    <link rel="manifest" href="upark.webmanifest">
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo.png"> 

    <title>Inscription</title>
</head>
<body>
    <div class="contener">
            <p class="inscription_title">Inscription</p>
            
            <form action="Inscription.php" method="POST">
                <input type="text" placeholder="Nom de famille" name="nom" autocomplete="off" class="change">
                <input type="text" placeholder="Prénom" name="prenom" autocomplete="off" class="change">
                <input type="email" placeholder="Adresse e-mail " name="mail" autocomplete="off" class="change">
                <input type="password" placeholder="Mot de passe" name="mdp" autocomplete="off" class="change">
                <input class="connexion" type="submit" value="Inscription" name="envoi" class="change">
            </form>
        <div class="google_connexion">
            <img src="img/google.svg" alt="">
            <p>Connectez-vous avec Google</p>
        </div>
        <div class="apple_connexion">
            <img src="img/apple.svg" alt="">
            <p>Connectez-vous avec Apple</p>
        </div>
    </div>
    
</body>
</html>




