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

global $conn;

$data3 = json_decode(file_get_contents("php://input"));

if (count($data3) > 0) {

$link = $data3->link;
$icons = $data3->icons;

    $sql = "INSERT INTO social2 (`link`, `icons`) VALUES ('$link', '$icons')";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':link', $link, PDO::PARAM_STR);
    $stmt->bindParam(':icons', $icons, PDO::PARAM_STR);
    $stmt->execute(array(":link" => $link, ":icons" => $icons));
    $conn = null;
}
?>
