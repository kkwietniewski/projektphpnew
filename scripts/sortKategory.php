<?php
    require_once './scripts/connect.php';
    $sql="SELECT kategoria_id, kategoria FROM kategoria"; 
    $result = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)) {
        echo<<<OPTIONS
        <option value="$row[kategoria_id]">$row[kategoria]</option>
OPTIONS; 
    }
?>