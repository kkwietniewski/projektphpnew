<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        #znacznik{
            
        }

    </style>
</head>
<body>

<nav class="navbar-expand-xl navbar-dark bg-dark p-2 mb-3" >
                    <div class="collapse navbar-collapse " >
                    <div class="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./panelStartowy.php">Panel startowy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./asortyment.php">Asortyment</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link active">Dodaj produkty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./zamowienia.php">Zamówienia</a>
                        </li>
                    </ul>
                        </div>
                        </div> 
</nav>
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
                                <td scope="row"><input type="checkbox" id="znacznik" checked></td>
                        </tr>
                        </tbody>
                        <table>

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-end mt-4">
                <button class="btn btn-outline-secondary mr-2">Kolejny produkt</button>
                <button type="submit" class="btn btn-success">Dodaj produkty</button>
            </div>
        </div>
</form>

    </div>

</div>    

</body>
</html>