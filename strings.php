<?php
	$var = "Halo";
	echo "Here its expand: $var"."\n";
	echo 'Here its not expand: $var '.'\n';
	echo "Here its expand in line ${var}5"."\n";
	/*Here its a error because the var name is changed
	echo "Here its not acceptet $var5";	*/

	//Negativ Indexes
	if($var[-2] == "l"){
		echo "true"."\n";
	}
	$one = "Hello";
	$two = " World";
	$three = "!";
	echo $one.$two;

	echo $one.$two.$three;

	//String concatenate is done by the '.' (dot) operator not with the '+' addition operator
	//It is poosible to concatenate more then one string together
