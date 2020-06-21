<?php
    session_start();
    //    $obrazekUrl =  $_POST['obrazek-url'];
    //    echo $obrazekUrl, $_POST['stan'] ;
    if (!empty($_POST['obrazek-url'])&&!empty($_POST['symbol'])&&!empty($_POST['nazwa'])&&!empty($_POST['cena'])&&!empty($_POST['stan'])&&!empty($_POST['waga'])&&!empty($_POST['kategoria'])&&!empty($_POST['producent'])) {
        
        $symbol = $_POST['symbol'];
        $nazwa = $_POST['nazwa'];
        $cena = $_POST['cena'];
        $obrazekUrl = './images/'.$_POST['obrazek-url'];
        $stan = $_POST['stan'];
        $waga = $_POST['waga'];
        $kategoria = $_POST['kategoria'];
        $producent = $_POST['producent'];
        
        require_once './connect.php';

        if ($conn->connect_errno)
       {
           $_SESSION['error']="Awaria bazy danych!";
           header('location: ../dodajProdukt.php');
           exit();
       }

       $sql = "SELECT * FROM kategoria WHERE kategoria = ?";
       $stmt=$conn->prepare($sql) ;
       $stmt->bind_param("s", $kategoria) ;

       if($stmt->execute()){
            // echo $kategoria." ok";
            $result = $stmt->get_result();
            $row = $result->fetch_array(MYSQLI_NUM);
            // echo $row[0];

            $sql = "INSERT INTO produkty (symbol, nazwa, cena, obrazek_url, stan, waga, kategoria, producent) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt=$conn->prepare($sql); 
            $stmt->bind_param("ssssssss", $symbol, $nazwa, $cena, $obrazekUrl, $stan, $waga, $row[0], $producent) ;

            if ($stmt->execute()){
                // echo 'ok';
                $conn->close();
                $stmt->close();
                header('location: ../asortyment.php');
                exit(); 
            
            }else{
                $sql = "INSERT INTO kategoria (kategoria) VALUES (?)";
                $stmt=$conn->prepare($sql);
                $stmt->bind_param("s",$kategoria);

                if($stmt->execute()){

                    $sql = "SELECT * FROM kategoria WHERE kategoria = ?";
                    $stmt=$conn->prepare($sql) ;
                    $stmt->bind_param("s", $kategoria) ;

                    if($stmt->execute()){
                        $result = $stmt->get_result();
                        $row = $result->fetch_array(MYSQLI_NUM);
                
                        $sql = "INSERT INTO produkty (symbol, nazwa, cena, obrazek_url, stan, waga, kategoria, producent) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                        $stmt=$conn->prepare($sql); 
                        $stmt->bind_param("ssssssss", $symbol, $nazwa, $cena, $obrazekUrl, $stan, $waga, $row[0], $producent) ;
                
                        if ($stmt->execute()){
                            // echo 'ok';
                            $conn->close();
                            $stmt->close();
                            header('location: ../asortyment.php');
                            exit(); 
                        }
                        else {
                            
                            $_SESSION['error']="Nie dodano produktu do bazy danych" ;
                            
                        }
                
                        $conn->close();
                        $stmt->close(); 
                        ?>
                            <script>
                                history.back(); 
                            </script>
                        <?php
                    }
                }
            }
        }     
    }else{

        $_SESSION['error']="Wypełnij wszystkie pola!";
        ?>
        <script>
            history.back(); 
        </script>
        <?php
    }
?>