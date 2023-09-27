<!DOCTYPE html>
<html>
<head>
	<title>"PHP-CONSTANTS"</title>
</head>
<body>
	<?php
        define("MINSIZE", 50);
        echo MINSIZE;
        echo constant("MINSIZE");

        print("<br><br> Valid and invalid constant names");
        //Valid constant names
        print(" <br> Valid constant names <br>");
        define("ONE", "first thing <br>");
        define("TWO2", "second thing <br>");
        define("THREE_3", "third thing <br>");
        echo ONE, TWO2, THREE_3;
        //Invalid constant names
        print(" <br> Invalid constant names <br>");
        define("2TWO", "second thing <br>");
        define("__THREE__", "third value"); 
        echo constant("2TWO");
        echo(__THREE__);

	?>
</body>
</html>