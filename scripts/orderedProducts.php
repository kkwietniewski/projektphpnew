<?php
    $orderId = $_POST['orderId'];

    // $sql = "SELECT "
    echo <<<PRODUCTS
    <tr> 
    <td scope="row">1</td>
    <td scope="row">1456</td>
    <td scope="col"><img class="img-fluid" style="width:40px; height:40px;" src="images/a.jpg"></td>
    <td scope="row">GIT1</td>
    <td scope="row">Gitara akustyczna</td>
    <td scope="row">Gitary akustyczne</td>
    <td scope="row">Fender</td>
    <td scope="row">5</td>
    <td scope="row">2000</td>
    <td scope="row">10000</td>
    <td scope="row">15kg</td>
    <td scope="row" class="btn-group">
        <a class="btn btn-outline-secondary btn-sm" href="./edycjaProduktu.php">Podgląd</a>
    </td>

    </tr>
PRODUCTS;
?>