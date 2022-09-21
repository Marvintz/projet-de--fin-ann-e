<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acceuil.css">
    <title>Acceuil</title>
</head>
<body>
    <div class="circle">
        <img src="img/qrcode.png" alt="qrcode" class="qrcode">
        <svg width="250" height="250">
            <circle r="100" cx="125" cy="125" class="track"></circle>
            <circle r="100" cx="125" cy="125" class="progress"></circle>
        </svg>
    </div>

    <div class="score_update">
        <div class="depense">
            <div class="containerDepense">
                <img src="img/euro.svg" alt="sigle euro" class="euro">  
                <div class="texteDepense">
                    <p>0 €</p>
                    <p>dépensés</p>
                </div>
            </div>
        </div>
        <div class="gagne">
            <div class="containerGagne">
                <img src="img/monnaie.svg" alt="sigle monnaie" class="monnaie">
                <div class="texteGagne"> 
                    <p>0 points</p>
                    <p>gagnés</p>
                </div>   
            </div>
        </div>
    </div>

    <div class="soldeRestant">
        <div class="textSoldeRestant">
            <h2>Solde restant</h2>
        </div>
        <div class="pointReceipe">
            <div class="points">
                <img src="img/euro.svg" alt="sigle euro" class="euro">
                <p>0 points</p>
            </div>
        </div>
        <div class="usePoint">
            <div class="utiliserPoints">
                <p>Utiliser vos points</p>
            </div>
        </div>
    </div>

    <footer>
        <div class="home"><a href="acceuil.php"><img src="img/home.svg" alt="home_button"></a></div>
        <div class="rewards"><a href="../rewards/rewards.php"><img src="img/reward.svg" alt="reward_button"></a></div>
        <div class="map"><a href="../liste_map/map.php"><img src="img/map.svg" alt="map_button"></a></div>
        <div class="fav"><a href="../compte_favoris/favoris.php"><img src="img/star.svg" alt="fav_button"></a></div>
        <div class="account"><a href="../compte_favoris/compte.php"><img src="img/account.svg" alt="account_button"></a></div>
    </footer>
</body>
<script src="acceuil.js"></script>
</html>