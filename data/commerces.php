<?php
    session_start();
    include "../bdd.php";
    $select_commerces = $pdo->prepare('SELECT * FROM commerces');
    $select_commerces->execute();
    $commerces = $select_commerces->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($commerces);
?>