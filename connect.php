<?php

$dbhost = "localhost:8889";
$dbuser = "root";
$dbpass = "root";
$dbname = "Term2_week8Project";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)) {
    die("failed to connect to database");
}

?>