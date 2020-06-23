<?php

	//session_start();
	
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
	<title>Rejestraca</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
       
        input{
            width:150px; 
        }

        .input-group-text{
            width:120px; 
          
        }
        
        .card
        {
            width:550px; 
            height:540px; 

        }
        .container-fluid{
            height:600px; 
        }
        a:hover{
            text-decoration:none; 
        }
        .card-body{

    margin-bottom:40px; 
    position:relative; 
    }
    .alert{
    position:absolute; 
    margin-top:110px;  
    width:500px; 
    height:25px; 
    font-size:13px; 
    }
    form{
    margin-bottom:25px; 
    }
    .input-group-prepend{
    margin-bottom:25x; 
    }
     
    </style>
</head>

<body>
<?php
    require_once './scripts/registration.php';
?>

<div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="row d-flex align-items-center">
            <div class="col-6 ">

            <div class="card p-4 bg-light">
                <div class="card-body mb-4">
                        <h5 class="card-title display-4 ">Rejestracja</h5>
				</div>
						<?php
						if(isset($_SESSION['e_nick'])){
							echo <<<ERROR
							<div class="alert alert-danger d-flex align-items-center">$_SESSION[e_nick]</div>
ERROR;
						unset($_SESSION['e_nick']);
						}else if (isset($_SESSION['e_email'])) {
							echo <<<ERROR
							<div class="alert alert-danger d-flex align-items-center">$_SESSION[e_email]</div>							
ERROR;
						unset($_SESSION['e_email']);
						}else if (isset($_SESSION['e_haslo'])) {
							echo <<<ERROR
							<div class="alert alert-danger d-flex align-items-center">$_SESSION[e_haslo]</div>							
ERROR;
						unset($_SESSION['e_haslo']);
						}
						?>
                

                <form action="" method="post">
				<div class="input-group my-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Login</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Podaj nazwę użytkownika" name='nick' autocomplete="off">
                </div>
                    <div class="input-group my-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Podaj email"name="email" id="email" autocomplete="off">
                    </div>
					<div class="input-group my-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Hasło</span>
                        </div>
                        <input type="password" class="form-control"  placeholder="Podaj hasło" name="haslo1" id="haslo1" autocomplete="off">
                    </div>
					<div class="input-group my-4">
                        <div class="input-group-prepend" style="margin-bottom:20px;">
                            <span class="input-group-text">Powtórz hasło</span>
                        </div>
						<input type="password" class="form-control" placeholder="Podaj hasło jeszcze raz" name="haslo2" id="haslo2" autocomplete="off">
                    </div>
                    <div class="d-flex justify-content-between align-items-baseline">
                        <div class="d-block">
                            <a href="./logowanie.php">Masz już konto? Zaloguj się!</a>
                        </div>
                            <button type="submit" class="btn btn-success">Zarejestruj się</button>
                    </div>
                    
	            </form>
			
            </div>

        </div>

        </div>
</div>
</body>
</html>



