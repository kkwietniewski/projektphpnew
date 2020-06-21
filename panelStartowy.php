<!DOCTYPE html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
        .card-img-top{
            height:150px;
            width:150px; 
        }
    </style>
    <title>Aplikacja do zarządzania sklepem internetowym</title>
</head>
<body>
                <nav class="navbar-expand-xl navbar-dark bg-dark p-2" >
                    <div class="collapse navbar-collapse " >
                    <div class="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active">Panel startowy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./asortyment.php">Asortyment</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="./dodajProdukt.php">Dodaj produkty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./zamowienia.php">Zamówienia</a>
                        </li>
                        </div>
                        </div> 
                    </ul>
                </nav>

        
  


<div class="container-fluid mt-5 mb-5 ">
        <div class="row">

            <div class="col-8">
                
                <?php
                require_once './scripts/getTable.php';
                ?>

            </div>

            <div class="col-4 ">

                <?php
                    require_once './scripts/waitingForService.php';
                ?>

            </div>
            

        </div>

        <div class="row">
            <div class="col-8">

                <h5 class="display-5 my-4">Najpopularniejsze produkty</h5>
                <div class=" d-flex justify-content-between">
                    <?php
                        require_once './scripts/popularProduct.php';
                    ?>

                </div>  
           </div>
      

        <div class="col-4">
            <div class="my-3">
                <h5 class="display-5 mb-4">Kończące się produkty</h5>
                
                <?php
                    require_once './scripts/getProductTable.php';
                ?>
                
            </div>

        </div>

        </div>

    </div>
    
</body>
</html>