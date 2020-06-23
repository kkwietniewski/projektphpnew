<?php
session_start();
if (!isset($_SESSION['zalogowany']))
	{
		header('Location: logowanie.php');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj produkt...</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        td input, td select{
            height:30px; 
        }
        #symbol, #waga{
            width:50px;
        }
        #nazwa, #kategoria{
            width:150px; 
        }
        #cena, #stan, #producent{
            width:100px; 
        }
        #obrazek-url{
            width:235px;
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

<header>
        <div class="topnav bg-dark">
            <a class="nav-link text-light" href="./panelStartowy.php">Panel startowy</a>
            <a class="nav-link text-light" href="./asortyment.php">Asortyment</a>
            <a class="nav-link disabled" href="./dodajProdukt.php">Dodaj produkty</a>
            <a class="nav-link text-white" href="./zamowienia.php">Zamówienia</a>
  <div class="topnav-right">
    <a class="nav-link text-light" href="./scripts/logout.php">Wyloguj</a>
  </div>
</div>
</header>
<?php
    if(isset($_SESSION['error'])){
    echo <<<ERROR
    <div class="container-fluid">
        <div class="alert alert-danger">$_SESSION[error]</div>
    </div>
ERROR;
                unset($_SESSION['error']) ;
    }
?>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">

        <table class="table table-striped table-light mt-2 ">
                    <thead>
                        <tr>
                           <th scope="col">Miniatura</th>
                           <th scope="col">Symbol</th>
                           <th scope="col">Nazwa</th>
                            <th scope="col">Cena</th>
                            <th scope="col">Stan</th>
                            <th scope="col">Waga</th>
                            <th scope="col">Kategoria</th>
                            <th scope="col">Producent</th>
                            <th scope="col">Nowość</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr> 
<form action="scripts/newProduct.php" method="post">
                                <td scope="row"><input type="file" id="obrazek-url" name="obrazek-url" accept="image/*"></td>
                                <td scope="row"><input type="text" id="symbol" name="symbol" placeholder="GIT1"></td>
                                <td scope="row"><input type="text" id="nazwa" name="nazwa" placeholder="Gitara akustyczna"></td>
                                <td scope="row"><input type="text" id="cena" name="cena" placeholder="2000.00zł"></td>
                                <td scope="row"><select class="mr-2" id="stan" name="stan">
                                                    <option value="Dostępny">Dostępny</option>
                                                    <option value="Niedostępny">Niedostępny</option>
                                                    <option value="Na wyczerpaniu">Na wyczerpaniu</option>
                                                </select></td>
                                <td scope="row"><input type="text" id="waga" name="waga" placeholder="15kg"></td>
                                <td scope="row"><input type="text" id="kategoria" name="kategoria" placeholder=""></td>
                                <td scope="row"><input type="text" id="producent" name="producent" placeholder="Fender"></td>
                                <td scope="row"><input type="checkbox" id="znacznik" name="nowosc" checked></td>
                        </tr>
                        </tbody>
                        <table>

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-end mt-4">
                <!-- <button class="btn btn-outline-secondary mr-2">Kolejny produkt</button> -->
                <button type="submit" class="btn btn-success">Dodaj produkty</button>
            </div>
        </div>
</form>
    </div>

</div>    

</body>
</html>