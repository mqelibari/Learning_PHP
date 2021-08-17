<?php
	//casting by (string) or strval()

	$var = 5;
	$str = (string) $var;
	echo gettype($str);
	$sec_var = 5.7;
	$sec_str = strval($sec_var);
	echo gettype($str);
