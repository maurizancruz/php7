<?php 
	
	//$ts = strtotime("2001-09-11");
	$ts = strtotime("+2 week"); //Aceita expressões: se colocar now = a data atual, +1 day = data de amanhã, +1 week = próxima semana.
	echo date("l, d/m/Y", $ts);

 ?>