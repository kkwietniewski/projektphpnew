<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: panelStartowy.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Logowanie</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
       
        input{
            width:150px; 
        }

        .input-group-text{
            width:70px; 
          
        }
        
        .card
        {
            width:550px; 
            height:410x; 

        }
        .container-fluid{
            height:610px; 
        }
        a:hover{
            text-decoration:none; 
        }
        .alert{
            height:25px; 
            font-size:13px; 
            margin-top:7px; 
        }
        .card-body{

            margin-bottom:40px; 
            position:relative; 
           
        }
        .alert{
            position:absolute; 
            margin-top:110px;  
            width:500px; 
        }
       form{
           margin-bottom:20px; 
       }
       .input-group-prepend{
           margin-bottom:20x; 
       }
    </style>
</head>

<body>

<div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="row d-flex align-items-center">
            <div class="col-6 ">

            <div class="card pb-4 pr-4 pl-4 bg-light">
           
                <div class="card-body">
                        <h5 class="card-title display-4 ">Logowanie</h5>
                </div>
                <?php
                if(isset($_SESSION['blad'])){
							echo <<<ERROR
							<div class="alert alert-danger d-flex align-items-center" >$_SESSION[blad]</div>
ERROR;
                unset($_SESSION['blad']);
						}
                ?>
                
                <form action="scripts/logIn.php" method="post">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Login</span>
                        </div>
                        <input type="text" class="form-control" name="login" id="login">
                    </div>  
          
                    <div class="input-group my-4">
                        <div class="input-group-prepend" style="margin-bottom:20px; ">
                            <span class="input-group-text">Hasło</span>
                        </div>
                        <input type="password" class="form-control"  name="haslo" id="haslo">
                    </div>

                    <div class="d-flex justify-content-between align-items-baseline">
                        <div class="d-block">
                            <a href="./scripts/reg.php">Nie masz konta? Zarejestruj się!</a>
                        </div>
                            <button type="submit" class="btn btn-success">Zaloguj Się</button>
                    </div>
	            </form>
            </div>



        </div>
</div>

</body>
</html>



