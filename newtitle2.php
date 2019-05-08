<?php
include_once ("header.php");
#Start session
#session_start();
#$_SESSION["conditions"] = "sunny";
#print_r($_SESSION);

if (isset($_POST['username']) and isset ($_POST['password'])){
#check it against db
	$conn = new mysqli ("$hn", "$un", "$pw", "$db");
if ($conn->connect_error) die ($conn->connect_error);

#sanitize data coming from user
	$username_entered =($_POST["username"]);
	$password_entered =($_POST["password"]);
#if known user continue
# NEED TO SALT AND HASH PW FIRST
$salt1 = "hjgjhfcv";
$salt2 = "dhirgire";

$fullpasswordwithsalts = $salt1.$password_entered.$salt2;


$hashedpw = hash('ripemd128',$fullpasswordwithsalts);
	$query = 'SELECT * FROM users 
	WHERE username="'.$username_entered.'" AND password="'.$hashedpw.'"';
	
	$result = $conn->query($query);
	if (!$result) die($conn->error);
	
	if ($result->num_rows) {
		print "Welcome $username_entered";
	} else {
		print "Unknown username and/or password.";
		die ("<p><a href = 'login_page.php'> Try again</a></p>");
	}
  
} else {
# else, redirect or show error and kill page. 

}

include_once ("adding.php");

include_once ("footer.php");
?>