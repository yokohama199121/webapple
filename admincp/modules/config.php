<?php
	$tenmaychu="sql9.freemysqlhosting.net";
	$tentaikhoan="sql9168124";
	$pass="hcK1uS5kU4";
	$csdl="sql9168124";
	$con=mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl)or die('cant connect');
	mysql_select_db($csdl,$con);
	mysql_query("set names 'utf8'");
?>