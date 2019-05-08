<!DOCTYPE HTML>
<html>
<head>
		<title>Added!</title>
</head>
<body>

<?php

//print_r($_POST);

if ( isset ($_POST["title_of_review"]) && !empty ($_POST ["title_of_review"])){

#connect to db

$conn = new mysqli ("$hn", "$un", "$pw", "$db");
if ($conn->connect_error) die ($conn->connect_error);
#$museum = sanitizeMySQL ($conn, $_POST ["museum_id"]);
$museum = $_POST ["museum_id"];
$rating = $_POST ["rating"];
$title = $_POST ["title_of_review"];
$review = $_POST["review"];
#construct query

$query = "INSERT INTO 'classics' ('museum_id','rating','title_of_review', 'review') 
VALUES ()";
echo $query;
#send the query
$result = $conn->query($query);
if (!$result) die ($conn->error);
}

include_once ("header.php");
?>

<h2> Added review! </h2>

<?php
include_once ("footer.php");

?>


</body>
</html>