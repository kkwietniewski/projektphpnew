<?php
    require_once './connect.php';
    session_start();
    $sortType = $_POST['sort'];
    $sortKategory=$_POST['sortKat'];
    $sortAvailability=$_POST['sortAvail']; 

    $sql="SELECT kategoria_id, kategoria FROM kategoria"; 
    $result = mysqli_query($conn, $sql);

    switch ($sortType) {
        case '0':
            $_SESSION['sortType']=0; 
        break; 
        case 'Cena rosnąco':
            $_SESSION['sortType']="cena";
            break;
        case 'Cena malejąco':
            $_SESSION['sortType']="cena DESC";
            break;
        case 'Nazwa a-z':
            $_SESSION['sortType']="nazwa";
            break;
        case 'Nazwa z-a':
            $_SESSION['sortType']="nazwa DESC";
            break;
            
    }
    if ($sortKategory=='0')
    {
        $_SESSION['sortKategory']=0; 
    }
    else {
        while ($row = mysqli_fetch_assoc($result)){
            
             if($row['kategoria_id']==$sortKategory){
                $_SESSION['sortKategory']=$row['kategoria']; 
                echo $_SESSION['sortKategory'] ;
             }
            
        }
    }

    switch ($sortAvailability) {
        case '0':
            $_SESSION['sortAvailability']=0; 
            break;
        case '1':
            $_SESSION['sortAvailability']="Dostępny"; 
            break;
        case '2':
            $_SESSION['sortAvailability']="Na wyczerpaniu"; 
            break;
        case '3':
            $_SESSION['sortAvailability']="Niedostępny"; 
            break;
        
        default:
            $_SESSION['sortAvailability']=0; 
            break;
    }
    
    header('location: ../asortyment.php');
?>