<?php

include("connection.php");


if(!empty($_GET['title'])) {
    $title = $_GET['title'];
}

if(!empty($_GET['content'])) {
    $content = $_GET['content'];
}





$query = $mysqli->prepare('SELECT * FROM content ');
$query->execute();
$query->store_result();
$num_rows = $query->num_rows();

if($num_rows == 0) {
    $response["status"] = "No todos";
}else{
        $newss = [];
            $query->bind_result($title,$content);
            while($query->fetch()){
                $news = [
                    'title' => $title,
                    'content' => $content,
                ];

                $newss[] = $news;
            }

            $response["status"] = "Success";
            $response["news"] = $newss;
        }
echo json_encode($response);

        
