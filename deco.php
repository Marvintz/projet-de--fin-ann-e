<?php
    if (isset($_POST['submit_deconnexion'])) {
        $_SESSION = array();
        session_destroy();
        unset($_SESSION);
        header('Location: ../compte_favoris/pas_connecte.php');    }
?>