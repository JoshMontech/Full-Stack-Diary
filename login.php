<?php

	session_start();
	include("/home/jmonzvse/public_html/mysql/connection.php");

	//submit btn
	if ($_POST['submit'] == "Sign Up") {

		/*	email validation
		* if no password, error concat
		* if not valid email, error concat
		*/
		if (!$_POST['email']) {
			$error .= "<br />Please enter an email address";
		} else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$error .= "<br />Please enter a VALID email address";
		}

		/*	password validation
		*	if no password, error concat
		*	if smaller than 8 char, error concat
		* if no capital included, error concat
		*/
		if (!$_POST['password']) {
			$error .= "<br />Please enter a password";
		} else {
			if (strlen($_POST['password']) < 8) {
				$error .= "<br />Please enter a password with 8 or more characters";
			}
			if (!preg_match('`[A-Z]`', $_POST['password'])) {
				$error .= "<br />Please enter a password with at least 1 capital letter";
			}
		}

		// if errors, prints $error
		if ($error) {
			echo "Error(s): ".$error;
		} else {

			/*
			* connect to db
			* query to select everything from users with email matching input
			* set to result
			*/
			$query = "SELECT * FROM `users` WHERE `email`='".mysqli_real_escape_string($link, $_POST['email'])."'";
			$result = mysqli_query($link, $query);
			echo $results = mysqli_num_rows($result);

			// if email already exists in users db, prompt user
			if ($results) {
				echo $_POST['email']." is already registered!";
			} else {
				// query to insert email and password into users using email and hashed pw 
				$query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
				mysqli_query($link, $query);
				echo "You've been signed up!";

				// save session id for user
				$_SESSION['id'] = mysqli_insert_id($link); 

				print_r($_SESSION);

				// redirect to login system
			}

		}

	} 

	if ($_POST['submit'] == "Log In") {

		// query to select from users where email and pw matches what user inputted
		$query = "SELECT * FROM `users` WHERE `email`='".mysqli_real_escape_string($link, $_POST['loginEmail'])."' AND `password`='".md5(md5($_POST['loginEmail']).$_POST['loginPassword'])."' LIMIT 1";
		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_array($result);
		print_r($row); // debug purposes

		if ($row) {
			$_SESSION['id']=$row['id'];
			print_r($_SESSION); // debug purposes
			// redirect to login system
		} else {
			echo "We could not find a user with that name/password combination";
		}
	}
?>