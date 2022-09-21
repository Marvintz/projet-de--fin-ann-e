<?php
session_start();
include '../bdd.php';
//si le boutton est active
if(isset($_POST['envoi'])){
    if (!isset($_POST['mail']) || !isset($_POST['mdp'])){
        echo 'vous avez pas remplis tous les champs';
    }else{
        $mail = htmlspecialchars($_POST['mail']);
        //securiser le mdp mais trouvé mieux 
        $mdp = $_POST['mdp'];
        $requete_connexion = $pdo->prepare('SELECT * FROM user WHERE mail = ? and mot_de_passe = ?');
        $requete_connexion->execute(array($mail ,$mdp ));
        $verif_connexion = $requete_connexion->fetch(PDO::FETCH_ASSOC);
        $count = $requete_connexion->rowCount();
        if($requete_connexion->rowCount() > 0){
            $_SESSION['prenom'] = $verif_connexion["prenom"];
            $_SESSION['nom'] = $verif_connexion["nom"];
            $_SESSION['id_utilisateur'] = $verif_connexion["id_utilisateur"];
            $_SESSION['mail'] = $verif_connexion["mail"];
            header('Location: ../liste_map/liste.php');

        }
        else{
            echo "mauvais mot de passe ou mauvaise adresse mail";            
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reseet.css">
    <link rel="stylesheet" href="css/pas_connecte.css">
    <link rel="stylesheet" href="css/compte.css">
    <link rel="stylesheet" href="css/inscription.css">
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="manifest" href="upark.webmanifest">
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo.png"> 

    <title>Connexion</title>
</head>
<body>
    <div class="contener" >
        <p class="inscription_title">Connexion</p>
        <form action="connexion.php" method="POST">
            <input type="email" placeholder="Adresse e-mail" name="mail" class="change">
            <input type="password" placeholder="Mot de passe" name="mdp" class="change">
            <input class="connexion" type="submit" value="Connexion" name="envoi">
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