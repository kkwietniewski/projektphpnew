<?php
    session_start();
    // echo $_POST['e'];
    $_SESSION['productId']=$_POST['productId'];
    if(isset($_SESSION['productId'])){
        // echo $_SESSION['productId'];
        $productId = $_SESSION['productId'];
        require_once './scripts/connect.php';

        $sql = "SELECT * FROM produkty p JOIN kategoria k ON p.kategoria = k.kategoria_id WHERE p.id = ?";
        $stmt=$conn->prepare($sql) ;
        $stmt->bind_param("s", $productId) ;

        if($stmt->execute()){
            $result = $stmt->get_result();
            $row = $result->fetch_array(MYSQLI_ASSOC);

            $obrazekUrl=$row['obrazek_url'];
            $symbol=$row['symbol'];
            $nazwa=$row['nazwa'];
            $kategoria=$row['kategoria'];
            $producent=$row['producent'];
            $cena=$row['cena'];
            $stan=$row['stan'];
            $waga=$row['waga'];
            $znacznik=$row['znacznik'];

        }
        
        echo <<<EDIT
        <div class="container">
            <div class="card my-4 col-6 offset-3 p-4 bg-light">
                <div class="row">
                    <div class="col-3">
                        <img class="img-thumbnail" src="$obrazekUrl">
                    </div>
                    <div class="col-9 d-flex align-items-center">
                        <h5 class="display-4">$nazwa</h5>
                    </div>
                </div>
    <form action="./scripts/editProduct.php" method="post">
        
        <div class="row mt-4">
            <div class="col">
        
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Miniatura</span>
                    </div>
                    <input type="file" class="form-control " name="obrazekUrl" id="obrazek-url">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Symbol</span>
                    </div>
                    <input type="text" class="form-control" value="$symbol" name="symbol" id="symbol">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nazwa</span>
                    </div>
                    <input type="text" class="form-control" value="$nazwa" name="nazwa" id="nazwa">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Kategoria</span>
                    </div>
                    <input type="text" class="form-control" value="$kategoria" name="kategoria" id="kategoria">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Producent</span>
                    </div>
                    <input type="text" class="form-control" value="$producent" name="producent" id="producent">
                </div>
            </div>
        </div>
                
                
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Cena</span>
                    </div>
                    <input type="text" class="form-control" value="$cena" name="cena" id="cena">
                </div>
            </div>
        </div>
            
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Stan</span>
                    </div>
                    <input type="text" class="form-control" value="$stan" name="stan" id="stan">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Waga</span>
                    </div>
                    <input type="text" class="form-control" value="$waga" name="waga" id="waga">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-3 d-flex justify-content-start align-items-baseline">
                <input type="radio" id="bestseller" name="znacznik">
                <label for="bestseller">Bestseller</label>
            </div>
            <div class="col-3 d-flex justfy-content-start align-items-baseline">
                <input type="radio" id="nowosc" name="znacznik" >
                <label for="nowosc">Nowość</label>
            </div>
            <div class="col-3 d-flex justify-content-end align-items-baseline">
                <input type="radio" id="promocja" name="znacznik">
                <label for="bestseller">Promocja</label>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-success">Potwiedź</button>
                </div>
            </div>
        
    </form>      
        
        </div>  
        
        
    </div>
EDIT;

switch ($znacznik) {
    case 0:
        ?>
        <script>
            document.querySelector('#bestseller').setAttribute('checked','');
        </script>
        <?php
    break;
    
    case 1:
        ?>
        <script>
            document.querySelector('#nowosc').setAttribute('checked','');
        </script>
        <?php
    break;

    case 2:
        ?>
        <script>
            document.querySelector('#promocja').setAttribute('checked','');
        </script>
        <?php
    break;
}
    }else{
        echo 'no';
    }
?>