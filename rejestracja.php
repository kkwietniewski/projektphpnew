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
	<title>Logowanie</title>
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
            height:500px; 

        }
        .container-fluid{
            height:600px; 
        }
        a:hover{
            text-decoration:none; 
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

                <form action="" method="post">
				<div class="input-group my-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Login</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Podaj nazwe użytkownika"  value="<?php
						if (isset($_SESSION['front_nick']))
							{
								echo $_SESSION['front_nick'];
								unset($_SESSION['front_nick']);
							}
							?>"name="nick" id="nick">
                    </div>  
					<?php
			if (isset($_SESSION['e_nick']))
			{
				echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
				unset($_SESSION['e_nick']);
			}
		?>
          
                    <div class="input-group my-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Podaj email"  value="<?php
						if (isset($_SESSION['front_email']))
							{
								echo $_SESSION['front_email'];
								unset($_SESSION['front_email']);
							}
							?>"name="email" id="email">
                    </div>
					<?php
			if (isset($_SESSION['e_email']))
			{
				echo '<div class="error">'.$_SESSION['e_email'].'</div>';
				unset($_SESSION['e_email']);
			}
		?>
					<div class="input-group my-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Hasło</span>
                        </div>
                        <input type="password" class="form-control"  placeholder="Podaj hasło" value="<?php
						if (isset($_SESSION['front_haslo1']))
							{
								echo $_SESSION['front_haslo1'];
								unset($_SESSION['front_haslo1']);
							}
							?>"name="haslo1" id="haslo1">
                    </div>
					<?php
			if (isset($_SESSION['e_haslo']))
			{
				echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);
			}
		?>
					
					<div class="input-group my-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Powtórz hasło</span>
                        </div>
						<input type="password" class="form-control" placeholder="Podaj hasło jeszcze raz " value="<?php
						if (isset($_SESSION['front_haslo2']))
							{
								echo $_SESSION['front_haslo2'];
								unset($_SESSION['front_haslo2']);
							}
							?>"name="haslo2" id="haslo2">
                    </div>

                    <div class="d-flex justify-content-between align-items-baseline mb-3">
                            <button type="submit" class="btn btn-success">Zarejestruj się</button>
                        
                    
	            </form>
				<form action="logowanie.php" method="post">
				<button type="submit" class="btn btn-outline-primary">Logowanie</button>
				</form>
				</div>
            </div>



        </div>
</div>


	
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

</body>
</html>



