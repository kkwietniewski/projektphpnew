<?php
    require_once './scripts/connect.php';
    
    $sql = "SELECT COUNT(id) AS orders FROM zamowienia";
    $sql2 = "SELECT COUNT(rozliczenie) AS oPaid FROM zamowienia WHERE rozliczenie = 'Opłacone'";
    $sql3 = "SELECT COUNT(rozliczenie) AS oNotPaid FROM zamowienia WHERE rozliczenie = 'Nieopłacone'";

    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    $result3 = mysqli_query($conn, $sql3);

    $order = mysqli_fetch_assoc($result);
    $paid = mysqli_fetch_assoc($result2);
    $notPaid = mysqli_fetch_assoc($result3);
    

    echo <<<SERVICE
    <div class="bg-light p-5">
                <div class="p-2">
                    <h5 class="display-5 mt-0">Oczekujące na obsługę</h5>
                    </div>
                    <hr class="my-2">
                    <div class="badge badge-info p-2">$order[orders]</div><span class="m-2">Zamówienia</span>
                    <hr class="my-2">
                    <div class="badge badge-success p-2">$paid[oPaid]</div><span class="m-2">Opłacone</span>
                    <hr class="my-2">
                    <div class="pb-3">
                    <div class="badge badge-warning p-2">$notPaid[oNotPaid]</div><span class="m-2">Oczekujące na płatność</span>
                    </div>
                
                 </div>
SERVICE;
?>