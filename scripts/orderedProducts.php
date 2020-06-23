<?php
    $orderId = $_POST['orderId'];
    $lp=1; 

    $sql = "SELECT * FROM zamowione_produkty zp JOIN produkty p ON zp.symbol_produktu = p.symbol JOIN kategoria k ON p.kategoria = k.kategoria_id WHERE numer_zamowienia = $orderId";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
    echo <<<PRODUCTS
    <tr> 
    <td scope="row">$lp</td>
    <td scope="row">$row[id]</td>
    <td scope="col"><img class="img-fluid" style="width:40px; height:40px;" src="$row[obrazek_url]"></td>
    <td scope="row">$row[symbol]</td>
    <td scope="row">$row[nazwa]</td>
    <td scope="row">$row[kategoria]</td>
    <td scope="row">$row[producent]</td>
    <td scope="row">$row[stan]</td>
    <td scope="row">$row[cena]</td>
    <td scope="row">$row[waga]</td>
    <td scope="row" class="btn-group">
    <form action="./edycjaProduktu.php" method="post">
        <button class="btn btn-outline-info btn-sm">Edytuj</button>
    </td>
    <input class="rowid" name="productId" value="$row[id]">
    </tr>
    </form>
PRODUCTS;
$lp=$lp+1; 
}
?>