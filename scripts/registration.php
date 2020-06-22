<?php

	session_start();
	
	if (isset($_POST['email']))
	{
		$Good=true;
		$nick = $_POST['nick'];
		if ((strlen($nick)<3) || (strlen($nick)>20))
		{
			$Good=false;
			$_SESSION['e_nick']="Nick musi posiadać od 3 do 20 znaków!";
		}
		
		if (ctype_alnum($nick)==false)
		{
			$Good=false;
			$_SESSION['e_nick']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		

		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$Good=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
		

		$password1 = $_POST['haslo1'];
		$password2 = $_POST['haslo2'];
		
		if ((strlen($password1)<8) || (strlen($password1)>20))
		{
			$Good=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
		}
		
		if ($password1!=$password2)
		{
			$Good=false;
			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
		}	

		$haslo_hash = password_hash($password1, PASSWORD_DEFAULT);
		
		if (!isset($_POST['regulamin']))
		{
			$Good=false;
			$_SESSION['e_regulamin']="Potwierdź akceptację regulaminu!";
		}				
		
		
		$_SESSION['front_nick'] = $nick;
		$_SESSION['front_email'] = $email;
		$_SESSION['front_haslo1'] = $password1;
		$_SESSION['front_haslo2'] = $password2;
		if (isset($_POST['regulamin'])) $_SESSION['front_regulamin'] = true;
		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			
			if ($conn->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				
				$result = $conn->query("SELECT id FROM uzytkownicy WHERE email='$email'");
				
				if (!$result) throw new Exception($conn->error);
				
				$how_many_email = $result->num_rows;
				if($how_many_email>0)
				{
					$Good=false;
					$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
				}		

				
				$result = $conn->query("SELECT id FROM uzytkownicy WHERE userName='$nick'");
				
				if (!$result) throw new Exception($conn->error);
				
				$how_many_nick = $result->num_rows;
				if($how_many_nick>0)
				{
					$Good=false;
					$_SESSION['e_nick']="Istnieje już gracz o takim nicku! Wybierz inny.";
				}
				
				if ($Good==true)
				{
					
					
					if ($conn->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$haslo_hash', '$email')"))
					{
						$_SESSION['udanarejestracja']=true;
						header('Location: udanaRejestracja.php');
					}
					else
					{
						throw new Exception($conn->error);
					}
					
				}
				
				$conn->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! </span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
	}
	
	
?>
