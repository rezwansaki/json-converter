<?php
//set map api url
$url = "https://jsonplaceholder.typicode.com/posts";

//call api
$json = file_get_contents($url);
$result = json_decode($json);
echo json_encode($result);
?>