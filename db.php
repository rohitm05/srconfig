<?php
	$con=@mysql_connect("http://185.27.134.10","rfgd_20357237","Rohitm05#");
	if(!$con)
	{ die("Connection Faild : ".mysql_error()); }
	mysql_select_db('rfgd_20357237_snti');
?>