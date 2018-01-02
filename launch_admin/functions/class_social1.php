<?php
class Sociala {
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

  public function insertSociala(){
    $data1 = json_decode(file_get_contents("php://input"));
    $s1_link = $data1->s1_link;
    $s1_icons = $data1->s1_icons;
    $stmt1 = $this->db->prepare("INSERT INTO social1 (`s1_link`, `s1_icons`) VALUES ('$s1_link', '$s1_icons')");
    $stmt1->bindParam(':s1_link', $s1_link, PDO::PARAM_STR);
    $stmt1->bindParam(':s1_icons', $s1_icons, PDO::PARAM_STR);
    $stmt1->execute();
    }

   public function selectSociala(){
    $stmt2 = $this->db->prepare("SELECT * FROM social1");
    $stmt2->execute();
    $info2 = array();
    while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
    $info2[] = array("s1_id"=>$row2['s1_id'], "s1_link"=>$row2['s1_link'], "s1_icons"=>$row2['s1_icons']);
    }
    $json2 = json_encode($info2);
    return $json2;
    }

    public function updateSociala(){
      $data2 = json_decode(file_get_contents("php://input"));
      $s1_id = $data2->s1_id;
      $s1_link = $data2->s1_link;
      $s1_icons = $data2->s1_icons;
     $stmt3 = $this->db->prepare("UPDATE social1 SET s1_link='$s1_link', s1_icons='$s1_icons' WHERE s1_id = '$s1_id'");
     $stmt3->bindParam(':s1_id', $s1_id, PDO::PARAM_STR);
     $stmt3->bindParam(':s1_link', $s1_link, PDO::PARAM_STR);
     $stmt3->bindParam(':s1_icons', $s1_icons, PDO::PARAM_STR);
     $stmt3->execute(array(":s1_id" => $s1_id, ":s1_link" => $s1_link, ":s1_icons" => $s1_icons));
     }

     public function deleteSociala(){
      $data3 = json_decode(file_get_contents("php://input"));

      if(count($data3) > 0){
      $s1_id = $data3->s1_id;
      $stmt4 = $this->db->prepare("DELETE FROM social1 WHERE s1_id = '$s1_id'");
      $stmt4->bindParam(":s1_id", $s1_id, PDO::PARAM_STR);
      $stmt4->execute();
      }

      }

}
