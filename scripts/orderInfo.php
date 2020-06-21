<?php
    $orderId = $_POST['orderId'];
    // echo $orderId;
    require_once './scripts/connect.php';

    $sql = "SELECT z.id,z.klient_id,z.data,z.status,z.typ_platnosci,z.rozliczenie,z.numer_przesylki,z.sposob_dostawy,z.faktura_vat,z.komentarz,ROUND(SUM(zp.cena),2) AS wartosc,k.id,k.nazwa,k.email,k.haslo,k.imie,k.nazwisko,k.data_utworzenia,k.adres,k.kod_pocztowy,k.miasto FROM  klienci k JOIN zamowienia z ON k.id = z.klient_id JOIN zamowione_produkty zp ON z.id = zp.numer_zamowienia WHERE z.id = $orderId";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    echo<<<ORDER
    <ul class="list-group list-group-flush mb-3">
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Id zamówienia:</span>$orderId</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Data:</span>$row[data]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Wartosc:</span>$row[wartosc]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Status:</span>$row[status]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Rozliczenie:</span>$row[rozliczenie]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Typ płatności:</span>$row[typ_platnosci]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Sposób dostawy:</span>$row[sposob_dostawy]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Faktura Vat:</span>$row[faktura_vat]</span></li>
    <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Komentarz:</span>$row[komentarz]</span></li>

    </div>
    </div>
    <div class="col-3 ">
        <div class="card mb-4 d-flex align-items-center justify-content-cetner">
                <h5 class="card-title p-2 pt-3 ">Dane kupującego</h5>
            <ul class="list-group list-group-flush mb-3 bg-light">
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Login:</span>$row[nazwa]</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Imię:</span>$row[imie]</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Nazwisko:</span>$row[nazwisko]</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Email:</span>$row[email]</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Adres:</span>$row[adres]</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Data utworzenia:</span>$row[data_utworzenia]</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Kod pocztowy:</span>$row[kod_pocztowy]</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Miasto:</span>$row[miasto]</span></li>
                
            </ul>
        </div>
    </div>
    </div>
</ul>
ORDER;
?>