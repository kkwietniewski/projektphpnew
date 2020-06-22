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
        .img-fluid{
            width:70px; 
            height:70px; 
        }

        input{
            width:250px; 
        }

        .input-group-text{
            width:100px; 
          
        }

        .opt{
            font-size:15px; 
        }
        

    </style>
</head>

<body>

<nav class="navbar-expand-xl navbar-dark bg-dark p-2" >
                    <div class="collapse navbar-collapse" >
                    <div class="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="rejestracja.php">Rejestracja - załóż darmowe konto</a>
                        </li>
                    </ul>
                        </div>
                        </div> 
</nav>
	

	<div class="container">
            <div class="card my-3 col-6 offset-3 p-4 bg-light">
                <div class="row">
                    <div class="col-9 d-flex align-items-center">
                        <h5 class="display-4">Zaloguj Się</h5>
                    </div>
                </div>	
	<form action="scripts/logIn.php" method="post">
	<div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Login</span>
                    </div>
                    <input type="text" class="form-control"  name="login" id="login">
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Hasło</span>
                    </div>
                    <input type="password" class="form-control"  name="haslo" id="haslo">
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-success">Zaloguj Się</button>
                </div>
            </div>
		
	
	</form>
</div>

	
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

</body>
</html>