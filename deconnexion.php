<?php
    session_start();
    $_SESSION = array();
    unset($_SESSION);
    unset($_SESSION['idUser']);
    unset($_SESSION['profile']);
    unset($_SESSION['fullName']);
    setcookie (session_id(), "", time() - 3600);
    session_destroy();
    session_write_close();
    header("location:index.php");
    exit;
?>