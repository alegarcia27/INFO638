<?php
include_once ("header.php");
?>

<select name="forma" onchange="location = this.value;">
 <option value="reviewsdate.php">View by date</option>
 <option value="reviewsmuseums.php">View by museum</option>
 <option value="reviews.php">View alphabetically (default)</option>
</select>
<p></p>

<?php
#constructed query
$query = 'SELECT * FROM users NATURAL JOIN reviews NATURAL JOIN museum ORDER BY date_of_review';
#sent to db
$result=$conn->query($query);
if(!$result) die ($conn->error);
#print out to see
while ($row=$result->fetch_assoc()) {
	#print to see array
	#print_r($row);
	#now format for website
	
	print "Written by ".$row["username"]."<br>";
	print $row["name_of_museum"]."<br>";
	print "Rating: ".$row["rating"]."/10<br>";
	print $row["title_of_review"]."<br>";
	print $row["review"]."<br>";
	print "Posted on ".$row["date_of_review"]."<br>";
	print "<p></p>";
}



?>

<h4><a href = "login_page.php">Write your own review</a></h4>

<?php
include_once ("footer.php");
?>