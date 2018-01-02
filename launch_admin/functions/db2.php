<?php
$dbhost = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$dbname = "angularjs";

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
}

?>
