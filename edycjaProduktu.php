<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edycja produktu</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .img-fluid{
            width:70px; 
            height:70px; 
        }

        input{
            width:250px; 
        }

        .input-group-text{
            width:100px; 
          
        }

        .opt{
            font-size:15px; 
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
            <a class="nav-link text-light" href="./zamowienia.php">Zamówienia</a>
  <div class="topnav-right">
    <a class="nav-link text-light" href="./scripts/logout.php">Wyloguj</a>
  </div>
</div>
</header>
  
<?php
    require_once './scripts/setProduct.php';
?>
<script src="./scripts/btnSubmit.js"></script>

</body>
</html>