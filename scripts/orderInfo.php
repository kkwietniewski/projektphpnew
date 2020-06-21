<?php
    $orderId = $_POST['orderId'];
    require_once './scripts/connect.php';

    $sql = "SELECT z.id,z.klient_id,z.data,z.status,z.typ_platnosci,z.rozliczenie,z.numer_przesylki,z.sposob_dostawy,z.faktura_vat,z.komentarz,ROUND(SUM(zp.cena),2) AS wartosc FROM  klienci k JOIN zamowienia z ON k.id = z.klient_id JOIN zamowione_produkty zp ON z.id = zp.numer_zamowienia WHERE z.id = $orderId ORDER BY z.id";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    echo<<<ORDER
    <ul class="list-group list-group-flush mb-3">
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Id zamówienia:</span>$row[id]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Data:</span>$row[data]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Wartosc:</span>$row[wartosc]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Status:</span>$row[status]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Rozliczenie:</span>$row[rozliczenie]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Typ płatności:</span>$row[typ_platnosci]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Sposób dostawy:</span>$row[sposob_dostawy]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Faktura Vat:</span>$row[faktura_vat]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Komentarz:</span>$row[komentarz]</span></li>
    
</ul>
ORDER;
?>