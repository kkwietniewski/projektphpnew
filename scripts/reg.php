<?php
session_start();
unset($_SESSION['e_email']);
unset($_SESSION['e_nick']);
unset($_SESSION['e_haslo']);
unset($_SESSION['e_email']);

header('location: ../rejestracja.php');
?>