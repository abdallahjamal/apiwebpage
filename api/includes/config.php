<?php

$local = "localhost";
$name = "root";
$pass = "";
$namedatabases = "web_php";

// $db = new PDO('mysql:host:127.0.0.1;dbname='.$namedatabases.';charset=utf8',$name,$pass);

// $connect = mysqli_connect($local, $name, $pass, $namedatabases, 3308);

// $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
// $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
// $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


// define('APP_NAME','PHP REST API TUTORIAL');


$connect = mysqli_connect($local, $name, $pass, $namedatabases, 3308);

if (!$connect) {
    dir("Erroe : " . mysqli_connect_error());
} else {
    return $connect;
}

?>