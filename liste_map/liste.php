<?php
    session_start();
    include "../bdd.php";
    if(isset($_POST['submit_favoris'])){
        $id_commerce = $_POST['id_commerce'];
        $requete_inscription = $pdo->prepare("INSERT INTO favoris(id_utilisateur, id_commerce) VALUES ('".$_SESSION['id_utilisateur']."','".$id_commerce."');");
        $requete_inscription->execute();
        header('Location: ../compte_favoris/favoris.php');
    }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
    <link rel="stylesheet" href="css/reseet.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/map_list.css">
    <link rel="manifest" href="upark.webmanifest">
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo.png"> 

</head>
<body class="main_liste">
    <main>
        <div class="search_filter_bar">
            <div class="search_bar_link">
                <div class="search_bar">
                    <div class="icon_text">
                        <img src="img/Vector.svg" alt="">
                        <input id="search_bar_list" type="text" placeholder="Votre recherche...">
                    </div>   
                    <img src="img/mic.svg" alt="">
                </div>
                <div class="map_switch_list">
                    <a href="map.php">Carte</a>
                </div>
            </div>
            <div id="filter_bar_list" class="filter_bar_list">
                <div id="hotel" class="filter_list"><img src="img/hotel.png" alt=""></div>
                <div id="restaurant" class="filter_list"><img src="img/restaurant.png" alt=""></div>
                <div id="shopping" class="filter_list"><img src="img/shopping.png" alt=""></div>
                <div id="station" class="filter_list"><img src="img/station.png" alt=""></div>
                <div id="pharmacie" class="filter_list"><img src="img/pharmacie.png" alt=""></div>
            </div>
        </div>
        <div id="all_result_liste" class="all_result_liste">
            <div class="result">
                <div class="logo_recent">
                    <img src="img/ic_outline-access-time.svg" alt="">
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="logo_recent">
                    <img src="img/ic_outline-access-time.svg" alt="">
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="logo_recent">
                    <img src="img/ic_outline-access-time.svg" alt="">
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="logo_recent">
                    <img src="img/ic_outline-access-time.svg" alt="">
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="logo_recent">
                    <img src="img/ic_outline-access-time.svg" alt="">
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="logo_recent">
                    <img src="img/ic_outline-access-time.svg" alt="">
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="logo_recent">
                    <img src="img/ic_outline-access-time.svg" alt="">
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="logo_recent">
                    <img src="img/ic_outline-access-time.svg" alt="">
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="logo_recent">
                    <img src="img/ic_outline-access-time.svg" alt="">
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="logo_recent">
                    <img src="img/ic_outline-access-time.svg" alt="">
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="logo_recent">
                    <img src="img/ic_outline-access-time.svg" alt="">
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="logo_recent">
                    <img src="img/ic_outline-access-time.svg" alt="">
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="logo_recent">
                    <img src="img/ic_outline-access-time.svg" alt="">
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
        </div>
        <div id="filter_commerce" class="filter_bar filter_commerce">
            <div class="filter">Ouvert actuellement</div>
            <div class="filter">Les mieux notés</div>
            <div class="filter">Les plus près</div>
            <div class="filter">Les plus côtés</div>
        </div>
        <div id="all_commerce" class="all_commerce">
            
        </div>
    </main>
    <nav>
        <a href="../Acceuil/acceuil.php"><img src="img/bxs_home.svg" alt=""></a>
        <a href="../rewards/rewards.php"><img src="img/gridicons_trophy.svg" alt=""></a>
        <a href="../liste_map/map.php"><img src="img/ant-design_unordered-list-outlined.svg" alt=""></a>
        <a href="../compte_favoris/favoris.php"><img src="img/uis_favorite.svg" alt=""></a>
        <a href="../compte_favoris/compte.php"><img src="img/carbon_user-avatar-filled.svg" alt=""></a>
    </nav>
    <script src="js/list.js"></script>
</body>
</html>