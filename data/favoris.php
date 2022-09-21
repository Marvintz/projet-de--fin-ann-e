<?php
    session_start();
    include "../bdd.php";
    $select_favoris = $pdo->prepare("SELECT DISTINCT * FROM favoris INNER JOIN user ON favoris.id_utilisateur = user.id_utilisateur INNER JOIN commerces ON favoris.id_commerce = commerces.id_commerce WHERE user.id_utilisateur = '".$_SESSION['id_utilisateur']."'");
    $select_favoris->execute();
    $favoris = $select_favoris->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($favoris);
?>