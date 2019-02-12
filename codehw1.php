<!DOCTYPE HTML>
<html>
<head>
		<title>Code Homework 1</title>
</head>
<body>
<?php
echo "<h1> Correct Change </h1>";

$cents = 159;

echo "<p>You are due $cents cents back in change.</p>
<p>You are due back:</p>";

if ($cents/100 >= 1 && $cents/100 <= 1.99){
	echo "1 dollar ";
}

if ($cents/100 >= 2 && $cents/100 <= 2.99){
	echo "2 dollars ";
}

if ($cents/100 >= 3 && $cents/100 <= 3.99){
	echo "3 dollars ";
}

if ($cents/100 >= 4 && $cents/100 <= 4.99){
	echo "4 dollars ";
}

$cents = $cents%100;

if ($cents/25 >= 1 && $cents/25 <= 1.99){
	echo "1 quarter ";
}

if ($cents/25 >= 2 && $cents/25 <= 2.99){
	echo "2 quarters ";
}

if ($cents/25 >= 3 && $cents/25 <= 3.99){
	echo "3 quarters ";
}

$cents = $cents%25;

if ($cents/10 >= 1 && $cents/10 <= 1.99){
	echo "1 dime ";
}

if ($cents/10 >= 2 && $cents/10 <= 2.99){
	echo "2 dimes ";
}

$cents = $cents%10;

if ($cents/5 >= 1 && $cents/5 <=2.99){
	echo "1 nickel ";
}

$cents = $cents%5;

if ($cents/1 >= 1 && $cents/1 <= 1.99){
	echo "1 pennies ";
}

if ($cents/1 >= 2 && $cents/1 <= 2.99){
	echo "2 pennies ";
}
	
if ($cents/1 >= 3 && $cents/1 <= 3.99){
	echo "3 pennies ";
}

if ($cents/1 >= 4 && $cents/1 <= 4.99){
	echo "4 pennies ";
}

echo "<h1> 99 Bottles of Beer </h1>";


for ($bottles = 99, $bots = 98; $bottles > (-1), $bots > (-1); -- $bottles, -- $bots) {
	echo "<p>$bottles bottles of beer on the wall, $bottles bottles of beer.</p>
<p>Take one down, pass it around, $bots bottles of beer on the wall.</p>";
	continue;
}


?>

</body>
</html>