<?php

$hostname = "dbmy0105.whservidor.com";
$username = "wisio";
$password = "89i7adxk";
$database = "wisio";


$con = mysql_connect("$hostname", "$username", "$password") or die(mysql_error());
mysql_select_db("$database", $con) or die(mysql_error());

?>