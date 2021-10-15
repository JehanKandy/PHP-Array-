<?php
	echo "<u>Arrary With PHP <br></u>";

	$laptop = array("HP","Lenovo","Asus","Dell");

	echo "var_dump <br>";
	echo var_dump($laptop);
	echo "<br>";

	echo "print_r <br>";
	echo print_r($laptop);
	
	echo "<br>";
	echo "Define";
	echo "<br>";

	define("laptop", "HP , Asus and Dell");
	echo laptop;
	echo "<br>";

	define("laptop1",["hp","Asus and ","Dell"]);
	echo laptop1[0];
	echo "<br>";

	echo laptop1[1];
	echo "<br>";

	echo laptop1[2];
	echo "<br>";


?>