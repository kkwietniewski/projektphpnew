<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: ../logowanie.php');
		exit();
	}

	require_once 'connect.php';
	
	if ($conn->connect_errno!=0)
	{
		echo "Error: ".$conn->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$password = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$password = htmlentities($password, ENT_QUOTES, "UTF-8");
	
		if ($result = @$conn->query(
		sprintf("SELECT * FROM uzytkownicy WHERE userName='%s' AND uzytkownicy.password='%s'",
		mysqli_real_escape_string($conn,$login),
		mysqli_real_escape_string($conn,$password))))
		{
			$how_many_userow = $result->num_rows;
			if($how_many_userow>0)
			{
				$_SESSION['zalogowany'] = true;
				
				$line = $result->fetch_assoc();
				$_SESSION['id'] = $line['id'];
				$_SESSION['userName'] = $line['userName'];
				
				
				unset($_SESSION['blad']);
				$result->free_result();
				header('Location: ../panelStartowy.php');
				
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				
				header('Location: ../logowanie.php');
				
				
			}
			
		}
		
		$conn->close();
	}
	
?>