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
	<title>Logowanie</title>
</head>

<body>
<a href="rejestracja.php">Rejestracja - załóż darmowe konto!</a>
	<br /><br />
	Zaloguj Się<br /><br />
	
	<form action="scripts/logIn.php" method="post">
	
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
		<input type="submit" value="Zaloguj się" />
	
	</form>
	
	
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

</body>
</html>