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
                    <div class="menu ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./panelStartowy.php">Panel startowy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="asortyment.php">Asortyment</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="./dodajProdukt.php">Dodaj produkty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./zamowienia.php">Zamówienia</a>
                        </li>
                    </ul>
                        </div>
                        </div> 
</nav>

<div class="container-fluid">

    <div class="row">
    <div class="col-9">
    <div class="card mb-4 d-flex align-items-center justify-content-cetner">
                <h5 class="card-title p-2 pt-3 ">Informacje o zamówieniu</h5>
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Login:</span>SzeldonKuper</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Imię:</span>Sheldon</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Nazwisko:</span>Cooper</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Email:</span>szeldon@wp.pl</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Ulica:</span>Fizyczna</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Nr domu</span>5</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Kod pocztowy:</span>00-000</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Miasto:</span>Amerykańskie</span></li>
                
            </ul>
        </div>
    </div>
    <div class="col-3 ">
        <div class="card mb-4 d-flex align-items-center justify-content-cetner">
                <h5 class="card-title p-2 pt-3 ">Dane kupującego</h5>
            <ul class="list-group list-group-flush mb-3 bg-light">
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Login:</span>SzeldonKuper</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Imię:</span>Sheldon</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Nazwisko:</span>Cooper</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Email:</span>szeldon@wp.pl</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Ulica:</span>Fizyczna</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Nr domu</span>5</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Kod pocztowy:</span>00-000</span></li>
                <li class="list-group-item"><span class="text-muted"><span class="font-weight-bold mr-2">Miasto:</span>Amerykańskie</span></li>
                
            </ul>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h4>Zamówione produkty</h4>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
        <table class="table table-striped table-light ">
                    <thead>
                        <tr>
                            <th scope="col">L.p.</th>
                            <th scope="col">Id produktu</th>
                           <th scope="col">Miniatura</th>
                           <th scope="col">Symbol</th>
                           <th scope="col">Nazwa</th>
                            <th scope="col">Kategoria</th>
                            <th scope="col">Producent</th>
                            <th scope="col">Ilość</th>
                            <th scope="col">Cena</th>
                            <th scope="col">Łączna wartość</th>
                            <th scope="col">Waga</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
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
                        </tbody>
                        <table>
        </div>
    </div>
                



</div>

<script>
    function myFunction() {
  var x = document.getElementById("filter");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
    </script>
    
</body>
</html>