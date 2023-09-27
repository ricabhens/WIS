<!DOCTYPE html>
<html>
<head>
	<title>"PHP-VARIABLE TYPES"</title>
</head>
<body>
	<?php
		print("<br> Integers <br>");
		$int_var = 12345;
		$another_int = -12345 + 12345;
		echo($int_var);
		print("<br>");
		echo($another_int);
		print("<br>");

		print("<br> Doubles <br>");
		$many = 2.2888800;
		$many_2 = 2.2111200;
		$few = $many + $many_2;
		print("$many + $many_2 = $few <br>");

		print("<br> Strings <br>");
		$variable = "name";
		$literally = 'My $variable will not print!<br>';
		print($literally);
		$literally = "My $variable will print!<br>";
		print($literally);

		print("<br> PHP Local Variables <br>");
		$x = 4;
		function assignx () {
		$x = 0;
		print "\$x inside function is $x. <br>";
		}
		assignx();
		print "\$x outside of function is $x.<br>";


		print("<br> PHP Function Parameters <br>");
		// multiply a value by 10 and return it to the caller
		function multiply ($value) {
		 $value = $value * 10;
		 return $value;
		}
		$retval = multiply (10);
		print "Return value is $retval<br>";

		print("<br> PHP Global Variables <br>");
		$somevar = 15;
		function addit() {
		GLOBAL $somevar;
		$somevar++;
		print "Somevar is $somevar <br>";
		}
		addit();

		//document.write("<br> <strong> PHP Static Variables </strong> <br>");
		print("<br> PHP Static Variables <br>");
		function keep_track() {
		 STATIC $count = 0;
		 $count++;
		 print $count;
		 print ""; 
		 }
		keep_track();
		keep_track();
		keep_track();
	?>
</body>
</html>