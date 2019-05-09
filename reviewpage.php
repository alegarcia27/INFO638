<?php
include_once ("header.php");


$mid= $_GET["review_id"];	
#construct query
$query='SELECT * FROM users NATURAL JOIN reviews NATURAL JOIN museum WHERE review_id = "'.$mid.'"';
#print $query;

#send to db
$result=$conn->query($query);
if(!$result) die ($conn->error);
#output to user
while ($row=$result->fetch_assoc()){
	#print_r ($row);
	print "<a href='reviewpage.php?review_id=".$row["review_id"]."'>".$row["title_of_review"]."</a><br>";
	print "Written by ".$row["username"]."<br>";
	print $row["name_of_museum"]."<br>";
	print "Rating: ".$row["rating"]."/10<br>";
	print $row["review"]."<br>";
	print "Posted on ".$row["date_of_review"]."<br>";
	print "<p></p>";
	
	
}



print '<a href="reviews.php">Back to reviews</a>';

include_once ("footer.php");

?>