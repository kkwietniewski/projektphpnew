<?php
    
    if(isset($_SESSION['sortType']) && isset($_SESSION['sortKategory']) && isset($_SESSION['sortAvailability'])){
        $sortType = $_SESSION['sortType'];
        unset($_SESSION['sortType']);    

        $sortKategory=$_SESSION['sortKategory']; 
        unset($_SESSION['sortKategory']) ;

        $sortAvailability=$_SESSION['sortAvailability'];
        unset($_SESSION['sortAvailability']); 

        $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id WHERE k.kategoria='$sortKategory' AND stan='$sortAvailability' ORDER BY $sortType";

    }
    else {
        $sql = "SELECT id, obrazek_url, symbol, nazwa, cena, stan, waga, k.kategoria, producent FROM produkty p JOIN kategoria k ON p.kategoria=k.kategoria_id";
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
                <td scope="row" class="btn-group">
                <form action="./edycjaProduktu.php" method="post">
                <button type="submit" class="btn btn-outline-info btn-sm" >Edytuj
                </button>
                <btn class="btn btn-outline-danger btn-sm" >Usuń</a>
                </td>
                </tr>
                <input class="rowid" name="productId" value="$row[id]">
                </form>

TAB;
    }
    echo <<<TABLE
            
    </tbody>
    </table>
TABLE;
?>