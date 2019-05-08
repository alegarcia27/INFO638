<?php
include_once ("header.php");

#constructed query
$query = 'SELECT * FROM users NATURAL JOIN reviews ORDER BY username';
#sent to db
$result=$conn->query($query);
if(!$result) die ($conn->error);
#print out to see
while ($row=$result->fetch_assoc()) {
	#print to see array
	#print_r($row);
	#now format for website
	
	print $row["username"]."<br>";
	print $row["title_of_review"]."<br>";
	print $row["date_of_review"]."<br>";
	#print $row["city"].", ".$row["state"]." ".$row["zip_code"]."<br>";
	#print $row["country"]."<br>";
	#print $row["type_of_museum"]."<br>";
	#print "Opened on: ".$row["date_opened"]."<br>";
	#print "<a href = ".$row["website"].">Website</a><br>";
	print "<p></p>";

}

include_once ("footer.php");
?>