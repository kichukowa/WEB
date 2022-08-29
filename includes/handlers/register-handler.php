<?php

function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText); //does not allow usage of html tags
	$inputText = str_replace(" ", "", $inputText); //removes intervals
	$inputText = ucfirst(strtolower($inputText)); //uppercases the first letter
	return $inputText;
}

function sanitizeFormUsername($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}

function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}

if(isset($_POST['registerButton'])) {
	//Register button was pressed

	$username = sanitizeFormUsername($_POST['username']);
	$firstName = sanitizeFormString($_POST['firstName']);
	$lastName = sanitizeFormString($_POST['lastName']);
	$email = sanitizeFormString($_POST['email']);
	$email2 = sanitizeFormString($_POST['email2']);
	$password = sanitizeFormPassword($_POST['password']);
	$password2 = sanitizeFormPassword($_POST['password2']);

	$wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

	if($wasSuccessful) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php"); //redirects the user to the index page
	}
}

?>