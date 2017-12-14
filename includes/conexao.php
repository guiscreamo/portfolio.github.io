<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "portfolio_db";

$con = new mysqli($host,$user,$pass,$db);

if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());



?>