<?php
    require_once './connect.php';
    $producrId = $_POST['productId'];
    echo $producrId;

    $sql = "DELETE FROM produkty WHERE id = ?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("s",$producrId);

    if($stmt->execute()){
        header("location: ../asortyment.php");
    }
?>