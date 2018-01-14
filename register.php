<?php
	
	// Variabile utilizate
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['user_name'] = $_POST['username'];

	//Golire spatii si cripare parola
	$user_name = $mysqli->escape_string($_POST['username']);
	$email = $mysqli->escape_string($_POST['email']);
	$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
		  
	// Verificare daca exista acel email in BD
	$result = $mysqli->query("SELECT * FROM utilizator WHERE email='$email'") or die($mysqli->error());

	// Daca exista, va afisa mesajul de mai jos
	if ( $result->num_rows > 0 ) {
		
		$_SESSION['message'] = 'Exista deja un utilizator cu aceasta adresa de Email!';
		header("location: error.php");
		
	}
	else { //Daca nu exista, il adaugam

		$sql = "INSERT INTO utilizator (user_name, email, password)" 
				. "VALUES ('$user_name','$email','$password')";

		// Adaugarea utilizatorului in BD
		if ( $mysqli->query($sql) )
		{
			$_SESSION['logged_in'] = true; //adaugat cu succes
		}
	}
?>