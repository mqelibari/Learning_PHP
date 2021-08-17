<?php
	//Floats internal repräsentation is a bit different as on the scree
	//e.g floor((0.1+0.7)*10 is 8 but internal represented as 7.9999999118...

	//Float comparing
	/* We compare floats by testing the difference of two floats, which is called
	   the machine epsilon*/

	$a = 1.23456780;
	$b = 1.23456789;
	$epsilon = 0.00001;
	
	if(($b -$a) < $epsilon){
		echo "Its the same float";
	}
	
