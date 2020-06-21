<?php
    require_once './scripts/connect.php';

    $sql = "SELECT z.data, z.id, k.imie, k.nazwisko, z.rozliczenie,ROUND(SUM(zp.cena),2) AS wartosc FROM klienci k JOIN zamowienia z ON k.id = z.klient_id JOIN zamowione_produkty zp ON z.id = zp.numer_zamowienia GROUP BY zp.numer_zamowienia ORDER BY zp.numer_zamowienia DESC LIMIT 5";

    $result = mysqli_query($conn, $sql);
    echo <<<TABLE
    <table class="table table-striped table-light ">
        <thead>
            <tr>
                <th scope="col">Data</th>
            <th scope="col">Szczegóły zamówienia</th>
            <th scope="col">Klient</th>
                <th scope="col">Wartość</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
TABLE;
    while ($row = mysqli_fetch_assoc($result)) {
    echo <<<TABLE
        
            <tr> 
                <td scope="row">$row[data]</td>
                <td scope="row">zamówienie nr $row[id]</td>
                <td scope="row">$row[imie] $row[nazwisko]</td>
                <td scope="row">$row[wartosc]</td>
                <td scope="row">$row[rozliczenie]</td>
            </tr>

TABLE;
    }
    echo <<<TABLE
            
    </tbody>
    </table>
TABLE;
?>