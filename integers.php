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
	echo $new."\n";
	//We can add or subtract the different bases with each other

	//If a integer is to big vor the System it will be converted to a float
	//If we cast a float to an int it will be rounded towards zero.

	$one = 1.5;
	$two = -1.5;
	echo (int)($one)."\n";
	echo (int)($two)."\n";

	/* If a float equals more then +/- 9.22e+18 = 2^63 on 64-bit platforms
	the converting will result to an undifined result.*/

	$Null_value = Null;
	$Null_value = (int) $Null_value;
	//This results to 0;

	
	//string casting

	$String = "5.6";
	$as_int = (int) $String;
	//This will be rounded towards 0 and convertet numeric to integer = 5	
