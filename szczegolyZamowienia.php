<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
.rowid{
    width:1px;
    height:1px;
    display: none;
}
</style>
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
            <?php
                // echo $_POST['orderId'];
                require_once './scripts/orderInfo.php';
            ?>
        

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
                            <th scope="col">Waga</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            require_once './scripts/orderedProducts.php';
                        ?>
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