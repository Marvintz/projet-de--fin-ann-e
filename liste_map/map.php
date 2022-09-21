<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
    <link rel="stylesheet" href="css/reseet.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/map_list.css">
    <link rel="manifest" href="upark.webmanifest">
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo.png"> 

</head>
<body class="main_map">
    <main>
        <div class="search_filter_bar">
            <div class="search_bar_link">
                <div class="search_bar">
                    <div class="icon_text">
                        <img src="img/Vector.svg" alt="">
                        <input id="search_bar" type="text" placeholder="Votre recherche...">
                    </div>   
                    <img src="img/mic.svg" alt="">
                </div>
                <div class="map_switch_list">
                    <a href="liste.php">Liste</a>
                </div>
            </div>
            <div id="filter_bar" class="filter_bar">
                <div class="filter">Restaurants</div>
                <div class="filter">Shopping</div>
                <div class="filter">Hôtels</div>
                <div class="filter">Stations</div>
            </div>
        </div>
        <div id="all_result" class="all_result">
            <div class="result">
                <div class="distance">
                    <div style="margin-bottom:5px;"><span style="margin-left:15px;">0</span></div>
                    <div>250km</div>
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="distance">
                    <div style="margin-bottom:5px;"><span style="margin-left:15px;">0</span></div>
                    <div>250km</div>
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="distance">
                    <div style="margin-bottom:5px;"><span style="margin-left:15px;">0</span></div>
                    <div>250km</div>
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="distance">
                    <div style="margin-bottom:5px;"><span style="margin-left:15px;">0</span></div>
                    <div>250km</div>
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="distance">
                    <div style="margin-bottom:5px;"><span style="margin-left:15px;">0</span></div>
                    <div>250km</div>
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="distance">
                    <div style="margin-bottom:5px;"><span style="margin-left:15px;">0</span></div>
                    <div>250km</div>
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="distance">
                    <div style="margin-bottom:5px;"><span style="margin-left:15px;">0</span></div>
                    <div>250km</div>
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="distance">
                    <div style="margin-bottom:5px;"><span style="margin-left:15px;">0</span></div>
                    <div>250km</div>
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="distance">
                    <div style="margin-bottom:5px;"><span style="margin-left:15px;">0</span></div>
                    <div>250km</div>
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
            <div class="result">
                <div class="distance">
                    <div style="margin-bottom:5px;"><span style="margin-left:15px;">0</span></div>
                    <div>250km</div>
                </div>
                <div class="texte">
                    <div style="margin-bottom: 5px;">Mama Shelter Paris East</div>
                    <div>Rue de Bagnolet, Paris</div>
                </div>
            </div>
        </div>
    </main>
    <nav>
        <a href="../Acceuil/acceuil.php"><img src="img/bxs_home.svg" alt=""></a>
        <a href="../rewards/rewards.php"><img src="img/gridicons_trophy.svg" alt=""></a>
        <a href="../liste_map/map.php"><img src="img/fa6-solid_map-location-dot.svg" alt=""></a>
        <a href="../compte_favoris/favoris.php"><img src="img/uis_favorite.svg" alt=""></a>
        <a href="../compte_favoris/compte.php"><img src="img/carbon_user-avatar-filled.svg" alt=""></a>
    </nav>
    <script>
        const search_bar = document.querySelector('#search_bar')  
        search_bar.addEventListener('change', (e) => {  
            if (e.target.value == ""){
                document.querySelector('#filter_bar').style.display = "flex";
                document.querySelector('#all_result').style.display = "none";
                document.querySelector('#all_result').style.height = "calc(100vh - 294px)";
            }
            else{
                document.querySelector('#filter_bar').style.display = "none";
                document.querySelector('#all_result').style.display = "flex";
                document.querySelector('#all_result').style.height = "calc(100vh - 244px)";
            }
        });
    </script>
</body>
</html>