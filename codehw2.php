<!DOCTYPE HTML>
<html>
<head>
		<title>Code Homework 2</title>
<style>

h1,h3{
font-family: Georgia, serif;
color: #0f5141;
}
		
p{
font-family: Georgia, serif;
text-align: center;
width:600px;
height:auto;
color: blue;
}
</style>		
		
</head>
<body>
<?php

#valid ISBN
$isbnstring = "0747532699";
#echo $isbnstring;
$first = substr ($isbnstring, 0,1);
#echo $first;
$second = substr ($isbnstring, 1, 1);
#echo $second;
$third = substr ($isbnstring, 2, 1);
#echo $third;
$fourth= substr ($isbnstring, 3, 1);
#echo $fourth;
$fifth= substr ($isbnstring, 4, 1);
#echo $fifth;
$sixth= substr ($isbnstring, 5, 1);
#echo $sixth;
$seventh= substr ($isbnstring, 6, 1);
#echo $seventh;
$eighth= substr ($isbnstring, 7, 1);
#echo $eighth;
$ninth=substr ($isbnstring, 8, 1);
#echo $ninth;
$tenth=substr ($isbnstring, 9, 1);
#echo $tenth;

#if ($tenth = X){
#	$tenth = 10;
#}


echo "<p></p>";

$isbnvalue = (10 * $first) + (9 * $second) + (8 * $third) + (7 * $fourth) + (6 * $fifth) + (5 * $sixth) + (4 * $seventh) + (3 * $eighth) + (2 * $ninth) + (1 * $tenth);
#echo $isbnvalue;
$isbncheck = $isbnvalue%11;
#echo $isbncheck;

echo "<h1>ISBN Validation</h1>";
echo "<p>Checking ISBN $isbnstring for validity...</p>";

if ($isbncheck == 0){
	print "<p>This is a valid ISBN!</p>";
} else {
	print "<p>This is NOT a valid ISBN.</p>";
}

echo "<h1>Coin toss!</h1>";

#echo '<img src="https://www.random.org/coins/faces/60-usd/0050c/obverse.jpg" alt="Heads!">';

$headspic = '<img src="https://www.random.org/coins/faces/60-usd/0050c/obverse.jpg" alt="Heads!">';
$tailspic = '<img src ="https://www.random.org/coins/faces/60-usd/0050c/reverse.jpg" alt = "Tails!">';

#One Coin Flip
Echo "<h3>Flipping a coin 1 time...</h3>";
$coin_toss = (mt_rand (1,2));
if ($coin_toss == 1) {
	print $headspic;
} else {
	print $tailspic;
}

echo "<p></p>";

echo "<h3>Flipping a coin 3 times...</h3>";
#Three Coin Flips
for ($i=1;$i<4; ++$i) {
$coin_toss = (mt_rand (1,2));
if ($coin_toss == 1) {
	print $headspic;
} else {
	print $tailspic;
}
}

echo "<p></p>";

echo "<h3>Flipping a coin 5 times...</h3>";
#Five Coin Flips
for ($i=1;$i<6; ++$i) {
$coin_toss = (mt_rand (1,2));
if ($coin_toss == 1) {
	print $headspic;
} else {
	print $tailspic;
}
}

echo "<p></p>";

echo "<h3>Flipping a coin 7 times...</h3>";
#Seven Coin Flips
for ($i=1;$i<8; ++$i) {
$coin_toss = (mt_rand (1,2));
if ($coin_toss == 1) {
	print $headspic;
} else {
	print $tailspic;
}
}

echo "<p></p>";

echo "<h3>Flipping a coin 9 times...</h3>";
#Nine Coin Flips

for ($i=1;$i<10; ++$i) {
$coin_toss = (mt_rand (1,2));
if ($coin_toss == 1) {
	#$head_count = 0;
	print $headspic;
	#++$head_count;
	#continue;
} else {
	print $tailspic;
	#$tails = 1;
#$tails_count = ++$tails;
	#continue;
	#print $tails_count;
}

#print $head_count;

}

#2 heads
echo "<h3>How long until we get 2 heads in a row?</h3>";

$heads_count = 0;

do {
$coin_toss = (mt_rand (1,2));
if ($coin_toss == 1) {
	print $headspic;
	$heads_count += 1;
} else {
	print $tailspic;
	$heads_count = 0;
}
}
while ($heads_count !=2);


?>

</body>
</html>