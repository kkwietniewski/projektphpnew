<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Rejestracja</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
       
        .car{
			width:550px; 
			height:500; 
		}
		.error
		{
			color:red;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.container-fluid{
			height:600px; 
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
				<form method="post">

                	<div class="input-group mb-3">
                    	<div class="input-group-prepend">
                        <span class="input-group-text" >Nazwa użytkownika</span>
                    	</div>
                    	<input type="text" class="form-control" placeholder="Podaj nazwę użytkownika" name='nick'> 
					 	<?php
						if (isset($_SESSION['front_nick']))
							{
								echo $_SESSION['front_nick'];
								unset($_SESSION['front_nick']);
							}
							?> 
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

