
<?php
include_once ("header.php");

#constructed query
$query = 'SELECT * FROM museum NATURAL JOIN location ORDER BY RAND()LIMIT 1';
#sent to db
$result=$conn->query($query);
if(!$result) die ($conn->error);
#print out to see
while ($row=$result->fetch_assoc()) {
	#print to see array
	#print_r($row);
	#now format for website
	
	print $row["museum_pic"]."<br>";
	print $row["name_of_museum"]."<br>";
	print $row["street_address"]."<br>";
	print $row["city"].", ".$row["state"]." ".$row["zip_code"]."<br>";
	print $row["country"]."<br>";
	print $row["type_of_museum"]."<br>";
	print "Opened on: ".$row["date_opened"]."<br>";
	print "<a href = ".$row["website"].">Website</a><br>";
	print "<p></p>";
}


?>


<?php 
include_once ("footer.php");
?>