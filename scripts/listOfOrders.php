<?php
    require_once './scripts/connect.php';

    $sql = "SELECT z.id,z.klient_id,z.data,z.status,z.typ_platnosci,z.rozliczenie,z.numer_przesylki,z.sposob_dostawy,z.faktura_vat,z.komentarz,ROUND(SUM(zp.cena),2) AS wartosc FROM  klienci k JOIN zamowienia z ON k.id = z.klient_id JOIN zamowione_produkty zp ON z.id = zp.numer_zamowienia GROUP BY zp.numer_zamowienia ORDER BY z.id";

    $result = mysqli_query($conn, $sql);
    echo <<<TAB
    <table class="table table-striped table-light ">
        <thead>
            <tr>
                <th scope="col">Nr zamówienia</th>
                <th scope="col">Data</th>
                <th scope="col">Id Klienta</th>
                <th scope="col">Wartość</th>
                <th scope="col">Status</th>
                <th scope="col">Rozliczenie</th>
                <th scope="col">Typ płatności</th>
                <th scope="col">Sposób dostawy</th>
                <th scope="col">Numer przesyłki</th>
                <th scope="col">Faktura VAT</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
TAB;
    while ($row = mysqli_fetch_assoc($result)) {
    echo <<<TAB
        
            <tr> 
                <td scope="row">$row[id]</td>
                <td scope="row">$row[data]</td>
                <td scope="col">$row[klient_id]</td>
                <td scope="row">$row[wartosc]</td>
                <td scope="row">$row[status]</td>
                <td scope="row">$row[rozliczenie]</td>
                <td scope="row">$row[typ_platnosci]</td>
                <td scope="row">$row[sposob_dostawy]</td>
                <td scope="row">$row[numer_przesylki]</td>    
                <td scope="row">$row[faktura_vat]</td>
                <form action="./szczegolyZamowienia.php" method="post">
                <td scope="row"><button class="btn btn-outline-dark" type="submit">Podgląd</button></td>
            </tr>
            <input class="rowid" name="orderId" value="$row[id]">
            </form>

TAB;
    }
    echo <<<TABLE
            
    </tbody>
    </table>
TABLE;
?>