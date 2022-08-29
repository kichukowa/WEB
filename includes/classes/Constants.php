<?php
class Constants {
	//with static we don't have to create instances of the class
	public static $usernameCharacters = "Your username must be between 5 and 25 characters!";
	public static $firstNameCharacters = "Your first name must be between 2 and 25 characters!";
	public static $lastNameCharacters = "Your last name must be between 2 and 25 characters!";
	public static $emailsDoNotMatch = "Your emails don't match!";
	public static $emailInvalid = "Your email is invalid!";
	public static $passwordsDoNotMatch = "Your passwords don't match!";
	public static $passwordNotAlphanumeric = "Your password can only contain letters and numbers!";
	public static $passwordCharacters = "Your password must be between 5 and 30 characters!";
	public static $usernameTaken = "This username already exists!";
	public static $emailTaken = "This email is already in use!";

	public static $loginFailed = "Your username or password was incorrect!";
}
?>