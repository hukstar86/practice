<?php
    date_default_timezone_set('Pacific/Auckland');
    $server = "localhost";
	$user = "root";
	$password = "";
	$database = "events_database";
	$link = mysqli_connect($server, $user, $password, $database);
?>