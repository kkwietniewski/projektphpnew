<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Rejestracja</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        
		.error
		{
			color:red;
			margin-top: 10px;
			margin-bottom: 10px;
		}
	</style>
</head>

<body>
	<div>

                <?php
                require_once './scripts/registration.php';
                ?>
                </div>
				<div class="container">
            <div class="card my-5 col-6 offset-3 p-4 bg-light">
                <div class="row">
                    <div class="col-9 d-flex align-items-center">
                        <h5 class="display-4">Rejestracja</h5>
                    </div>
                </div>	
	<form method="post">
	
	<div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" >Nazwa użytkownika</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Podaj nazwe użytkownika"  value="<?php
						if (isset($_SESSION['front_nick']))
							{
								echo $_SESSION['front_nick'];
								unset($_SESSION['front_nick']);
							}
							?>"name="nick" id="nick">
                </div>
            </div>
        </div>
		
		<?php
			if (isset($_SESSION['e_nick']))
			{
				echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
				unset($_SESSION['e_nick']);
			}
		?>
		<div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Email</span>
                    </div>
                    <input type="text" class="form-control"  value="<?php
						if (isset($_SESSION['front_email']))
							{
								echo $_SESSION['front_email'];
								unset($_SESSION['front_email']);
							}
							?>"name="email" id="email">
                </div>
            </div>
        </div>
		
		<?php
			if (isset($_SESSION['e_email']))
			{
				echo '<div class="error">'.$_SESSION['e_email'].'</div>';
				unset($_SESSION['e_email']);
			}
		?>
		<div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Twoje hasło</span>
                    </div>
                    <input type="password" class="form-control"  value="<?php
						if (isset($_SESSION['front_haslo1']))
							{
								echo $_SESSION['front_haslo1'];
								unset($_SESSION['front_haslo1']);
							}
							?>"name="haslo1" id="haslo1">
                </div>
            </div>
        </div>
		
		<?php
			if (isset($_SESSION['e_haslo']))
			{
				echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);
			}
		?>		
		<div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Powtórz hasło</span>
                    </div>
                    <input type="password" class="form-control"  value="<?php
						if (isset($_SESSION['front_haslo2']))
							{
								echo $_SESSION['front_haslo2'];
								unset($_SESSION['front_haslo2']);
							}
							?>"name="haslo2" id="haslo2">
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-success pull-right">Zarejestruj Się</button>
                </div>
            </div>
			
		
	</form>
	</div>
	
	<form action="logowanie.php" method="post">
	<div class="container">
	<div class="col-8">
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary pull-right">Powrót do logowania</button>
                </div>
            </div>
		</form>
		</div>

</body>
</html>

