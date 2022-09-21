<?php
session_start();
include '../bdd.php';
include '../deco.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reseet.css">
    <link rel="stylesheet" href="css/compte.css">
    <link rel="manifest" href="upark.webmanifest">
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo.png"> 

    <title>compte</title>
</head>
<body>
    <!-- compte -->
    <div class="compte">
    <!-- contenus  -->
        <div class="contener_settings">
            <div class="title">Compte</div>
            <div class="utilisateur">
                <img src="img/Group.svg" alt="image de profil">
                <div>
                    <div>
                        <?php 
                            echo $_SESSION['prenom'];
                            echo " ";
                            echo $_SESSION['nom'];
                        ?>    
                    </div>
                    <div>
                        <?php 
                            echo $_SESSION['mail'];
                        ?>                  
                    </div>
                </div>
                <div>
                    <img src="img/Vector.svg" alt="image pour la suite"> 
                </div>
            </div>  
            <div class="setting">
                <div class="items_settings">
                    <div>Inscripion</div>
                    <img src="img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            <div class="setting">
                <div class="items_settings">
                    <div>Nombre de points</div>
                    <img src="img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            <div class="setting">
                <div class="items_settings">
                    <div>Sécurité et identifiants de connexion</div>
                    <img src="img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            <div class="setting">
                <div class="items_settings">
                    <div>Notifications</div>
                    <img src="img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            <div class="setting">
                <div class="items_settings">
                    <div>Autorisations pour réseaux sociaux</div>
                    <img src="img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            <div class="setting">
                <div class="items_settings">
                    <div>Gestion de compte</div>
                    <img src="img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            <div class="setting">
                <div class="items_settings">
                    <div>Information personnelles</div>
                    <img src="img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            <div class="setting">
                <div class="items_settings">
                    <div>
                        <form action="compte.php" method="POST">
                            <input class="deco" type="submit" value="Deconnexion" name="submit_deconnexion">
                        </form>
                    </div>
                    <img src="img/Vector.svg" alt="image pour la suite">
                </div>
            </div>
            
        </div>
    </div>  
    <!-- nav -->
    <div class="footer">
        <div class="nav_barre">
            <div class="item_nav_barre">
                <a href="../Acceuil/acceuil.php"><img src="img/home.svg" alt=""></a>
                <a href="../rewards/rewards.php"><img src="img/recompenses.svg" alt=""></a>
                <a href="../liste_map/map.php"><img src="img/map_claire.svg" alt=""></a>
                <a href="favoris.php"><img src="img/favorite.svg" alt=""></a>
                <a href="compte.php"><img src="img/compte_bleu.svg" alt=""></a>
            </div> 
        </div>
    </div>  
</body>
</html>