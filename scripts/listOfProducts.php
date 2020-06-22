<?php
    //ustawiony znacznik
    if (isset($_SESSION['sortLabel'])) 
    {

        $sortLabel=$_SESSION['sortLabel']; 
        unset($_SESSION['sortLabel']) ;

        //wszystkie oznaczone ze znacznikiem
        if(isset($_SESSION['sortType']) && isset($_SESSION['sortKategory']) && isset($_SESSION['sortAvailability']))
        {
            $sortType = $_SESSION['sortType'];
            unset($_SESSION['sortType']);    

            $sortKategory=$_SESSION['sortKategory']; 
            unset($_SESSION['sortKategory']) ;

            $sortAvailability=$_SESSION['sortAvailability'];
            unset($_SESSION['sortAvailability']); 

            // wszystkie 
            if ($sortType!="0" && $sortKategory!="0" && $sortAvailability!="0") 
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE k.kategoria='$sortKategory' AND stan='$sortAvailability' AND znacznik='$sortLabel' ORDER BY $sortType";
            }
            // domyślne
            else if ($sortType=="0" && $sortAvailability=="0" && $sortKategory=="0")
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE znacznik='$sortLabel'";
            }
            // tylko ostatnia
            else if ($sortType=="0" && $sortKategory=="0" && $sortAvailability!="0")
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE stan='$sortAvailability' AND znacznik='$sortLabel'";
            }
            // tylko druga
            else if ($sortType=="0" && $sortKategory!="0" && $sortAvailability=="0")
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE k.kategoria='$sortKategory' AND znacznik='$sortLabel'";
            }
            // tylko pierwsza
            else if ($sortType!="0" && $sortKategory=="0" && $sortAvailability=="0")
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE znacznik='$sortLabel' ORDER BY $sortType";
            }
            // pierwsza i druga
            else if ($sortType!="0" && $sortKategory!="0" && $sortAvailability=="0")
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE k.kategoria='$sortKategory' AND znacznik='$sortLabel' ORDER BY $sortType";
            }
            // pierwsza i trzecia
            else if ($sortType!="0" && $sortKategory=="0" && $sortAvailability!="0")
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE stan='$sortAvailability' AND znacznik='$sortLabel' ORDER BY $sortType";
            }
            // druga i trzecia
            else if ($sortType=="0" && $sortKategory!="0" && $sortAvailability!="0")
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE stan='$sortAvailability' AND znacznik='$sortLabel' AND  k.kategoria='$sortKategory'";
            }
        
        } else {
            $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE AND znacznik='$sortLabel'";
        }
           
    }
    //wszystkie oznaczone bez znacznika
    else 
    {
        if(isset($_SESSION['sortType']) && isset($_SESSION['sortKategory']) && isset($_SESSION['sortAvailability']))
        {
            $sortType = $_SESSION['sortType'];
            unset($_SESSION['sortType']);    
    
            $sortKategory=$_SESSION['sortKategory']; 
            unset($_SESSION['sortKategory']) ;
    
            $sortAvailability=$_SESSION['sortAvailability'];
            unset($_SESSION['sortAvailability']); 
    
            // wszystkie 
            if ($sortType!="0" && $sortKategory!="0" && $sortAvailability!="0") 
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE k.kategoria='$sortKategory' AND stan='$sortAvailability' ORDER BY $sortType";
            }
            // domyślne
            else if ($sortType=="0" && $sortAvailability=="0" && $sortKategory=="0")
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id";
            }
            // tylko ostatnia
            else if ($sortType=="0" && $sortKategory=="0" && $sortAvailability!="0")
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE stan='$sortAvailability'";
            }
            // tylko druga
            else if ($sortType=="0" && $sortKategory!="0" && $sortAvailability=="0")
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE k.kategoria='$sortKategory'";
            }
            // tylko pierwsza
            else if ($sortType!="0" && $sortKategory=="0" && $sortAvailability=="0")
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id ORDER BY $sortType";
            }
            // pierwsza i druga
            else if ($sortType!="0" && $sortKategory!="0" && $sortAvailability=="0")
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE k.kategoria='$sortKategory' ORDER BY $sortType";
            }
            // pierwsza i trzecia
            else if ($sortType!="0" && $sortKategory=="0" && $sortAvailability!="0")
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE stan='$sortAvailability' ORDER BY $sortType";
            }
            // druga i trzecia
            else if ($sortType=="0" && $sortKategory!="0" && $sortAvailability!="0")
            {
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE stan='$sortAvailability' AND  k.kategoria='$sortKategory'";
            }
            
        }
        else {
            if (isset($_SESSION['search'])) {
                $search= $_SESSION['search'];
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE nazwa = '$search'";
            }else{
                $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent, znacznik FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id";

            }
        }
           

    }
   

        $result = mysqli_query($conn, $sql);

    echo <<<TAB
    <table class="table table-striped table-light ">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Miniatura</th>
                <th scope="col">Symbol</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Cena</th>
                <th scope="col">Stan</th>
                <th scope="col">Waga</th>
                <th scope="col">Kategoria</th>
                <th scope="col">Producent</th>
                <th scope="col">Etykieta</th>
            </tr>
        </thead>
        <tbody>
TAB;

    while ($row = mysqli_fetch_assoc($result)) {
    echo <<<TAB
        
            <tr> 
                <td scope="row">$row[id]</td>
                <td scope="row"><img class="img-fluid" style="width:40px; height:40px;" src="images/a.jpg"></td>
                <td scope="row">$row[symbol] </td>
                <td scope="row">$row[nazwa]</td>
                <td scope="row">$row[cena]</td>
                <td scope="row">$row[stan]</td>
                <td scope="row">$row[waga]</td>
                <td scope="row">$row[kategoria]</td>
                <td scope="row">$row[producent]</td>
                <td scope="row">$row[znacznik]</td>
                <td scope="row" class="btn-group">
                <form action="./edycjaProduktu.php" method="post">
                <button type="submit" class="btn btn-outline-info btn-sm" >Edytuj
                </button>
                <input class="rowid" name="productId" value="$row[id]">
                </form>
                <form action="./scripts/deleteProduct.php" method="post">
                <button type="submit" class="btn btn-outline-danger btn-sm" >Usuń</button>
                <input class="rowid" name="productId" value="$row[id]">
                </form>
                </td>
                </tr>

TAB;
    }
    echo <<<TABLE
            
    </tbody>
    </table>
TABLE;
?>