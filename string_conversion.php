<?php
	//casting by (string) or strval()

	$var = 5;
	$str = (string) $var;
	echo gettype($str);
	$sec_var = 5.7;
	$sec_str = strval($sec_var);
	echo gettype($str);

	//special conversion
	$bo = true;
	$t_str = (string) $bo;
	echo "This string has the value 1: $t_str\n";
	$sec_bo = false;
	echo "This string is empty : $sec_bo\n";
