<?php
    session_start();
    include "../bdd.php";
    if(isset($_POST['delete_favoris'])){
        $id_favoris = $_POST['id_favoris'];
        $delete_favoris = $pdo->prepare("DELETE FROM favoris WHERE id_favoris = '".$id_favoris."'");
        $delete_favoris->execute();
        header('Location: ../compte_favoris/favoris.php');
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
    <link rel="stylesheet" href="css/favoris.css">
    <link rel="manifest" href="upark.webmanifest">
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo.png"> 

    <title>Document</title>

</head>
<body>
    <div class="recherche">
        <div class="loupe">
            <img src="img/loupe.svg" alt="">
            <input type="text" placeholder="Votre recherche">
        </div>
        <img src="img/micro.svg" alt="" class="micro">
    </div>
    <div id="contener_favoris" class="contener_favoris" >

    </div>
    <div class="footer">
        <div class="nav_barre">
            <div class="item_nav_barre">
                <a href="../Acceuil/acceuil.php"><img src="img/home.svg" alt=""></a>
                <a href="../rewards/rewards.php"><img src="img/recompenses.svg" alt=""></a>
                <a href="../liste_map/map.php"><img src="img/map_claire.svg" alt=""></a>
                <a href="favoris.php"><img src="img/sta_favoris.svg" alt=""></a>
                <a href="compte.php"><img src="img/compte.svg" alt=""></a>
            </div> 
        </div>
    </div>  
    <script src="js/favoris.js"></script>
</body>
</html>