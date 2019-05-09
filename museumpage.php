<?php
include_once ("header.php");


$mid= $_GET["museum_id"];	
#construct query
$query='SELECT * FROM location NATURAL JOIN museum WHERE museum_id = "'.$mid.'"';
#print $query;

#send to db
$result=$conn->query($query);
if(!$result) die ($conn->error);
#output to user
while ($row=$result->fetch_assoc()){
	#print_r ($row);
	print $row["museum_pic"]."<br>";
	print "<a href='museumpage.php?museum_id=".$row["museum_id"]."'>".$row["name_of_museum"]."</a><br>";
	print $row["street_address"]."<br>";
	print $row["city"].", ".$row["state"]." ".$row["zip_code"]."<br>";
	print $row["country"]."<br>";
	print $row["type_of_museum"]."<br>";
	print "Opened on: ".$row["date_opened"]."<br>";
	print "<a href = ".$row["website"].">Website</a><br>";
	print "<p></p>";
	
	
}



print '<a href="museums.php">Back to museums</a>';

include_once ("footer.php");

?>