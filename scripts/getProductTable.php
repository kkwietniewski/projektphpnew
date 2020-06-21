<?php

require_once './scripts/connect.php';

    $sql = "SELECT nazwa, symbol, cena, stan FROM produkty WHERE stan = 'Na wyczerpaniu' OR stan = 'Niedostępny' ORDER BY id DESC LIMIT 5";

    $result = mysqli_query($conn, $sql);
    echo <<<TABLE
    <table class="table table-striped table-light ">
                    <thead>
                        <tr>
                            <th scope="col">Nazwa</th>
                           <th scope="col">Symbol</th>
                           <th scope="col">Cena</th>
                           <th scope="col">Stan</th>
                        </tr>
                        </thead>
                        <tbody>
TABLE;
    while ($row = mysqli_fetch_assoc($result)) {
    echo <<<TABLE

    <tr> 
        <td scope="row">$row[nazwa]</td>
        <td scope="row">$row[symbol]</td>
        <td scope="row">$row[cena]</td>
        <td scope="row">$row[stan]</td>
    
    </tr>
TABLE;
    }
    echo <<<TABLE
            
    </tbody>
    </table>
TABLE;
?>