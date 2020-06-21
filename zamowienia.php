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
            <div>
                     <?php
                        require_once './scripts/listOfOrders.php';
                   ?>
            </div>
                

</div>
    
</body>
</html>