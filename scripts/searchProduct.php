<?php
    session_start();
    require_once './connect.php';
    $search = $_POST['search'];
    $sql = "SELECT nazwa FROM produkty WHERE nazwa = ?";
    $stmt=$conn->prepare($sql) ;
    $stmt->bind_param("s", $search);
    
    if($stmt->execute()){
        $stmt->store_result();
        if ($stmt->num_rows == 0) {
            $_SESSION['error'] = "Nie ma produktu o takiej nazwie!";
            header('location: ../asortyment.php');
        }else{
            unset($_SESSION['error']);
            $_SESSION['search'] = $search;
            header('location: ../asortyment.php');
            
        }
        
    }else{
        // $_SESSION['error'] = "Nie ma produktu o takiej nazwie!";
        // header('location: ../asortyment.php');
    }
    
    
?>