<?php
    session_start();
    if (!isset($_SESSION['logado'])) {
        header("Location: ../public/indexLogado.php");
    }
?>