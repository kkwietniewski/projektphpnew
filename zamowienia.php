<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
</head>
<body>

<nav class="navbar-expand-xl navbar-dark bg-dark p-2 mb-4" >

                    <div class="collapse navbar-collapse" >
                    <div class="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./panelStartowy.php">Panel startowy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./asortyment.php">Asortyment</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="./dodajProdukt.php">Dodaj produkty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" >Zamówienia</a>
                        </li>
                        </div>
                        </div> 
                    </ul>
                </nav>

<div class="container-fluid">
<div class="row">
        <div class="col-12">
            <h4>Produkty</h4>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
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
                            <th scope="col">Komentarz</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr> 
                            <td scope="row">1</td>
                            <td scope="col">20-02-2020</td>
                            <td scope="row">3</td>
                            <td scope="row">270.59</td>
                            <td scope="row">Wysłane</td>
                            <td scope="row">Rozliczone</td>
                            <td scope="row">Karta</td>
                            <td scope="row">Kurier</td>
                            <td scope="row">1326543</td>
                            <td scope="row">NIE</td>
                            <td scope="row">-</td>
                            <td scope="row"><a class="btn btn-outline-dark" href="szczegolyZamowienia.php">Podgląd</a></td>
                            

                        </tr>
                        </tbody>
                        <table>
        </div>
    </div>
                

</div>
    
</body>
</html>