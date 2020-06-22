<?php
    session_start();
    $_SESSION['product_id']=0;
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
    <title>Asortyment</title>
    
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
    .filters {
    overflow: hidden;
    background-color: #f0f0f1; 
    position: relative;
}

.filters #filter {
  display: none;
  
}

.filters a {
  color: #000000;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

.filters a:hover {
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
    <title>Aplikacja do zarządzania sklepem internetowym</title>
</head>
<body>
    <header>
        <div class="topnav bg-dark">
            <a class="nav-link text-light" href="./panelStartowy.php">Panel startowy</a>
            <a class="nav-link disabled" href="">Asortyment</a>
            <a class="nav-link text-light" href="./dodajProdukt.php">Dodaj produkty</a>
            <a class="nav-link text-white" href="./zamowienia.php">Zamówienia</a>
  <div class="topnav-right">
    <a class="nav-link text-light" href="./scripts/logout.php">Wyloguj</a>
  </div>
</div>
</header>

<div class="container-fluid">

    <div class="row" >
        <div class="col-12">
            <div class="d-flex my-4" style="justify-content:space-between; align-items:center">

                <div class="newProd">
                    <a class="btn btn-success p-2" href="./dodajProdukt.php"style="color:#ffffff;">+ Dodaj produkt
                    </a>
                </div>

                <div class="md-form active-cyan" style="width:300px">
                <form action="./scripts/searchProduct.php" method="post">
                    <input class="form-control" type="text" placeholder="Wyszukaj produkt..." aria-label="Search" name="search" type="submit">
                </form>
                </div>

            </div>
        </div>
        
        
    </div>

    <div class="row">
        <div class="col-12 mt-3 mb-4">
        
            <div class="filters">
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
                <input type="radio" id="bestseller" value="bestseller" name="lbl">
                <label for="bestseller" class="mr-2">Bestseller</label>
                <input type="radio" id="nowosc" value="Nowość" name="lbl">
                <label for="nowosc" class="mr-2">Nowość</label>
                <input type="radio" id="promocja" value="promocja" name="lbl">
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
                    
                    if (isset($_SESSION['error'])) {
                        echo <<<ERROR
                        <div class="container-fluid">
                            <div class="alert alert-danger">$_SESSION[error]</div>
                        </div>
ERROR;
                unset($_SESSION['error']) ;
                    }else{
                        require_once './scripts/listOfProducts.php';
                    }
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