<?php
class Images {
    // Database credentials
    private $dbHost     = '127.0.0.1';
    private $dbUsername = 'root';
    private $dbPassword = '';
    private $dbName     = 'angularjs';
    public $db;

    public function __construct(){
        if(!isset($this->db)){
            try{
                $conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword);
                $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db = $conn;
            }catch(PDOException $e){
                die("Failed to connect with MySQL: " . $e->getMessage());
            }
        }
    }

     public function insertImage(){

 if(!empty($_FILES)){
      $path = '../../images/' . $_FILES['file']['name'];
      if(move_uploaded_file($_FILES['file']['tmp_name'], $path)){
        $stmt1 = $this->db->prepare("INSERT INTO images (`name`) VALUES ('".$_FILES['file']['name']."')");
        $stmt1->bindValue(':name', $_FILES['file']['name'], PDO::PARAM_STR);
        $stmt1->execute();
        echo 'File Uploaded';
           } else {
                echo 'File Uploaded But not Saved';
           }
      }
 else{
      echo 'Some Error';
 }
        }

     public function selectImage(){
      $stmt2 = $this->db->prepare("SELECT * FROM images");
      $stmt2->execute();
      $info2 = array();
      while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
      $info2[] = array("im_id"=>$row2['im_id'], "name"=>$row2['name']);
      }
      $json2 = json_encode($info2);
      return $json2;
      }

    public function deleteImage(){
      $data3 = json_decode(file_get_contents("php://input"));

      if(count($data3) > 0){
      $name = $data3->name;
      $stmt3 = $this->db->prepare("DELETE FROM images WHERE name = '$name'");
      $stmt3->bindParam(":name", $name, PDO::PARAM_STR);
      $stmt3->execute();
      unlink("../../images/".$name);
      }
    }
}
