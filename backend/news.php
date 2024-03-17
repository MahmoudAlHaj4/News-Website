<?php

include("connection.php");

$title = $_POST['title'];
$content = $_POST['content'];


$query = $mysqli->prepare('INSERT INTO content(title,content) values(?,?);');
$query->bind_param('ss',$title,$content);
$query->execute();


$response["status"] = "success";
$response["message"] = "news  created";
echo json_encode($response);