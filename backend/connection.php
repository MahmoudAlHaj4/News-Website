<?php

$host = 'localhost';
$db_user = 'root';
$db_pass = null;
$db_name = 'news';
$db_port = 3307;

$mysqli = new mysqli($host, $db_user, $db_pass, $db_name,$db_port);

if ($mysqli->connect_error) {
    die('Connection Failed: ' . $mysqli->connect_error);
}else{
    echo "connected";
}
