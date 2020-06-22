<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zamównienia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
.rowid{
    width:1px;
    height:1px;
    display: none;
}
.topnav {
    overflow: hidden;
}

.topnav a {
  float: left;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16px;
}
.topnav-right {
  float: right;
}
</style>
</head>
<body>
<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: logowanie.php');
		exit();
	}
	
?>
<header>
        <div class="topnav bg-dark">
            <a class="nav-link text-light" href="./panelStartowy.php">Panel startowy</a>
            <a class="nav-link text-light" href="./asortyment.php">Asortyment</a>
            <a class="nav-link text-light" href="./dodajProdukt.php">Dodaj produkty</a>
            <a class="nav-link disabled" href="./zamowienia.php">Zamówienia</a>
  <div class="topnav-right">
    <a class="nav-link text-light" href="./scripts/logout.php">Wyloguj</a>
  </div>
</div>
</header>
<div class="container-fluid my-4">
<div class="row">
        <div class="col-12">
            <h4>Zamówienia</h4>
    </div>
    </div>
            <div>
                     <?php
                        require_once './scripts/listOfOrders.php';
                   ?>
            </div>
                

</div>
    
</body>
</html>