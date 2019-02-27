<!DOCTYPE HTML>
<html>
<head>
		<title>Code Homework 3</title>
	<style>
	h1,h3{
		font-family: Georgia, serif;
		color: #854442;
	}
	
	h2{
			font-family: Georgia, serif;
		color: #854442;
		background-color: #fff4e6;
		font-weight:bold;
		font-size: 1.5em;
		text-align: center;
		border: 2.5px solid #854442;
		border-radius: 25px;
		width:400px;
		height:auto;
	}

	p{
		font-family: Georgia, serif;
		text-align: center;
		width:600px;
		height:auto;
		color: #854442;
	}
	
	table, th, td{
		font-family: Georgia, serif;
		border: 2px solid #3c2f2f;
		border-collapse: collapse;
		}
		
		th{
		background-color: #4b3832;
		color: #ffffff
		}
		
		td{background-color:#fff4e6}
	</style>
		
</head>
<body>
<?php

echo "<h1>Book List</h1>";

$bookdata = array (
"Book1"=> array ("PHP and MySQL Web Development", "Luke Welling", 144, "Paperback", 31.63),
"Book2"=> array ("Web Design with HTML, CSS, JavaScript and jQuery", "Jon Duckett", 135, "Paperback", 41.23),
"Book3"=> array ("PHP Cookbook: Solutions & Examples for PHP Programmers", "David Sklar", 14, "Paperback", 40.88),
"Book4"=> array ("JavaScript and JQuery: Interactive Front-End Web Development", "Jon Duckett", 251, "Paperback", 22.09),
"Book5"=> array ("Modern PHP: New Features and Good Practices", "Josh Lockhart", 7, "Paperback", 28.49),
"Book6"=> array ("Programming PHP", "Kevin Tatroe", 26, "Paperback", 28.96),
);
print "
<table>
	<tr>
		<th>Title</th>
		<th>Author</th>
		<th>Number of pages</th>
		<th>Type of book</th>
		<th>Price</th>
	</tr>";
foreach ($bookdata as $book => $book_array){
$title = $book_array[0];
$author = $book_array[1];
$page = $book_array[2];
$type = $book_array[3];
$price = $book_array[4];
print "
	<tr>
		<td> $title </td>
		<td> $author </td>
		<td> $page </td>
		<td> $type </td>
		<td> $$price </td>
	</tr>
";
}
print "</table>";

$total_price = ($bookdata ["Book1"][4])+($bookdata ["Book2"][4])+($bookdata ["Book3"][4])
+($bookdata ["Book4"][4])+($bookdata ["Book5"][4])+($bookdata ["Book6"][4]);

print "<h2>Your total price is $".$total_price.".</h2>";

print "<p>---</p>";
echo "<h1>Coin Toss</h1>";
echo "<h3>How long until we get 4 heads in a row?</h3>";

$headspic = '<img src="heads.jpg" alt="Heads!">';
$tailspic = '<img src ="tails.jpg" alt = "Tails!">';

$heads_count= 0;
$count= 0;
  while ($heads_count<4){
  $flip = mt_rand(0,1);
  $count++;
      if ($flip ==1){
             $heads_count++; 
             print $headspic;
            }
	else{
			$heads_count=0; 
             print $tailspic;
            }
   }
	echo "<p>Flipped 4 heads in a row, in  ".$count." flips!</p>";

?>

</body>
</html>