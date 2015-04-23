<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>


<?php // phpinfo(); 

// comment in php, has no closing
	
	/* 
	multi
	line
	comment
	*/
?>

<!-- 
variable, like a container
can not have spaces
must have dollar sign before it
it can not start with a number
 -->

<?php
$votingAge = 18;
echo "<p>The legal age of voting is " , $votingAge , ".</p>"
?>

<?php
$worldvar = "world";
$sunvar = "sun";
$moonvar = "moon";
$worldinfo = 928970000;
$suninfo = 72000000;
$mooninfo = 3456;
echo "Hello $worldvar!<br />";
echo "The $worldvar is $worldinfo miles from the $sunvar.<br />";
echo "The $sunvar's core temperature is approx $suninfo degrees Farenheit.<br />";
echo "The $moonvar is $mooninfo miles in diameter.<br />";
?>

<!-- 
constants
	do not begin with dollar sign
	they are all upper case letters
	no spaces between words
they all begin with define function
	define (CONSTANT_NAME);
 -->
 
 <?php
 define ("WORLD_INFO", 928970000);
 define ("SUN_INFO", 720000000);
 define ("MOON_INFO", 3456);
 echo "Hello $worldvar <br />";
 echo "The $worldvar is " , WORLD_INFO , " miles from the $sunvar.<br />";
 echo "The $sunvar's core tempature is approx " , SUN_INFO , " degrees Farenheit.<br />";
 ?>

<?php
echo "<p>The odd numbers between 1 and 100 are: ";
$i =1;
while ($i <= 100) {
	echo " $i";
	$i = $i + 2;
	}
echo "</p>"
?>

<?php
$GasPrice = 2.57;
if (($GasPrice >= 2 ) && ($GasPrice <= 3 )) {
	echo "<p> Gas prices are between $2.00 and $3.00 </p>"; 	
	}
	else { 
	echo "<p> Gas prices are not between $2.00 and $3.00 </p>";
	}
?>
 
</body>
</html>