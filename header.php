<?php

session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
		<title>Museum Review</title>
</head>
<body>
<h1>Museum Reviews</h1>

<p></p>

<?php

include_once ("cssstyle.php");
if (isset ($_SESSION['username'])) {
	print "Hello ".$_SESSION['username'];
	print "<a href= 'logout_page.php'>Log out</a>";
}

include_once ("projectlogin.php");

$conn = new mysqli("$hn", "$un", "$pw", "$db");
if ($conn->connect_error) die($conn->connect_error);

?>
<div class="content">