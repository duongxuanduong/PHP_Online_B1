<?php 
    session_start();
    unset($_SESSION['student'][$_GET['id']]);
    header('Location: list.php');
?>