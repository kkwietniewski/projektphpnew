<?php
    session_start();
    $_SESSION['product_id']=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        a{
            color: #343a40d1;
        }
        a:hover{
            text-decoration:none; 
            color:#000000;            

        }


        /* Style the navigation menu */
    .topnav {
    overflow: hidden;
    background-color: #f0f0f1; 
    position: relative;
}

.topnav #filter {
  display: none;
  
}

.topnav a {
  color: #000000;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.rowid{
    width:1px;
    height:1px;
    display: none;
}
button{
    width:70px; 
    font-size:10px; 
}
    </style>
</head>
<body>

<nav class="navbar-expand-xl navbar-dark bg-dark p-2" >
                    <div class="collapse navbar-collapse" >
                    <div class="menu ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./panelStartowy.php">Panel startowy</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link">Asortyment</a>
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

    <div class="row" >
        <div class="col-12">
            <div class="d-flex my-4" style="justify-content:space-between; align-items:center">

                <div class="newProd">
                    <a class="btn btn-success p-2" href="./dodajProdukt.php"style="color:#ffffff;">+ Dodaj produkt
                    </a>
                </div>

                <div class="md-form active-cyan" style="width:300px">
                    <input class="form-control" type="text" placeholder="Wyszukaj produkt..." aria-label="Search">
                </div>

            </div>
        </div>
        
        
    </div>

    <div class="row">
        <div class="col-12 mt-3 mb-4">
        
            <div class="topnav">
                <a href="javascript:void(0);" onclick="myFunction()">Filtry</a>

            <form action="./scripts/filtrProducts.php" method="post">
                <div class="m-2 p-2 align-items-baseline" id="filter">
                    <!-- na sztywno SORTOWANIE-->
                    <select class="mr-2" name="sort">
                        <option value="0">Domyślnie</option>
                        <option value="Cena rosnąco">Cena rosnąco</option>
                        <option value="Cena malejąco">Cena malejąco</option>
                        <option value="Nazwa a-z">Nazwa a-z</option>
                        <option value="Nazwa z-a">Nazwa z-a</option>
                    </select>
                    <!-- kategorie z bazy danych -->
                    <select class="mr-2" name="sortKat">
                        <option value="0">Wszystkie</option>
                        <?php
                            require_once './scripts/sortKategories.php' ;
                        ?>
                    </select>
                <!-- na sztywno STAN -->
                <select class="mr-2" name="sortAvail">
                        <option value="0">Wszystkie</option>   
                        <option value="1">Dostępny</option>
                        <option value="2">Na wyczerpaniu</option>
                        <option value="3">Niedostępny</option>
                </select>

                <!-- Checkboxy z kategoriami -->
                <input type="radio" id="bestseller" value="bestseller">
                <label for="bestseller" class="mr-2">Bestseller</label>
                <input type="radio" id="nowosc" value="Nowość">
                <label for="nowosc" class="mr-2">Nowość</label>
                <input type="radio" id="promocja" value="promocja">
                <label for="promocja" class="mr-2">Promocja</label>

                <button class="btn btn-sm btn-outline-secondary ml-4" type="submit">Filtruj</button>



                </div>
            </form>
            </div>
  
        </div>

    </div>
    <!-- </div> -->

    <div class="row">
        <div class="col-12">
            <h4>Produkty</h4>
           
    </div>
    </div>
        <div>
                 <?php
                    require_once './scripts/listOfProducts.php';
                ?>
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