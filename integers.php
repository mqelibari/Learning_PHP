<?php
	//Integers can be specified in different bases.
	$decimal = 123;
	$octal = 0123;
	$hexdecimal = 0x1A;
	$binary = 0b11111111;
	
	echo gettype($decimal)."\n";
	echo gettype($octal)."\n";
	echo gettype($hexdecimal)."\n";
	echo gettype($binary)."\n";

	$new = $decimal + $octal;
	echo gettype($new)."\n";
	echo $new;
	//We can add or subtract the different bases with each other
