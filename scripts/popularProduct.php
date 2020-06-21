<?php
require_once './scripts/connect.php';

$sql = "SELECT obrazek_url, nazwa, stan, cena, producent FROM produkty LIMIT 3";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  echo<<<IMG
  <div class="card d-flex justify-content-center" style="width:220px;">
    <img class="card-img-top mx-auto mt-3 mb-0" src="$row[obrazek_url]">
    <div class="card-body">
        <h5 class="card-title d-flex justify-content-center">$row[nazwa]</h5>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Cena: $row[cena] zł</li>
        <li class="list-group-item">Producent: $row[producent]</li>
        <li class="list-group-item">Stan: $row[stan]</li>
        </ul>
    </div>
  </div>
IMG;

}
?>

