<?php
    session_start();
    require_once './connect.php';

    $id = $_SESSION['productId'];
    $obrazekUrl = $_POST['obrazekUrl'];
    $nazwa = $_POST['nazwa'];
    $producent = $_POST['producent'];
    $cena = $_POST['cena'];
    $stan = $_POST['stan'];
    $waga = $_POST['waga'];
    // $_POST['znacznik']

    $sql = "UPDATE produkty SET nazwa = ?, cena = ?, obrazek_url = ?, stan = ?, waga = ?, producent = ? WHERE id = ?";
    $stmt=$conn->prepare($sql) ;
    $stmt->bind_param("sssssss", $nazwa,$cena,$obrazekUrl,$stan,$waga,$producent,$id) ;
    
    if($stmt->execute()){

        header('location: ../asortyment.php');
    }else{
        echo "error";
    }
    
?>