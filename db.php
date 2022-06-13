<?php
$host = "host = 127.0.0.1";
$port = "port = 5432";
$dbname = "dbname = stycom";
$credentials = "user=postgres password=divyagupta30";

$connect = pg_connect("$host $port $dbname $credentials");


?>