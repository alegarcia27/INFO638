<?php
include_once ("header.php");

#constructed query
$query = 'SELECT * FROM creators NATURAL JOIN artwork NATURAL JOIN museum NATURAL JOIN location ORDER BY RAND()LIMIT 1';
#sent to db
$result=$conn->query($query);
if(!$result) die ($conn->error);
#print out to see
while ($row=$result->fetch_assoc()) {
	#print to see array
	#print_r($row);
	#now format for website
	
	print $row["image"]."<br>";
	print $row["artwork_name"]."<br>";
	print "Created by ".$row["creator_name"]."<br>";
	print "Can be found at ".$row["name_of_museum"];
	print " in ".$row["city"].".<br>";
	
	#print "<p></p>";
}

include_once ("footer.php");
?>