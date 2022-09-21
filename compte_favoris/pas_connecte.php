<?php
session_start();
include '../bdd.php';
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
    <link rel="manifest" href="upark.webmanifest">
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo.png"> 

    <title>pas_connecte</title>
</head>
<body>
    <div class="pas_connecte">
        
        <div class="contener">
            
            <div class="items">
                <img src="img/pouce.svg" alt="">
                <div class="rejoindre">Rejoignez-nous</div>
                <div class="connexion"><a style="color:#E0E0E0; text-decoration: none;" href="connexion.php">Connexion</a></div>
                <div style="margin-top: 25px;" class="inscrire"><a style="color:#E0E0E0; text-decoration: none;" href="Inscription.php">S’inscrire</a></div>
            </div>
                
        </div>


    </div>

</body>
</html>