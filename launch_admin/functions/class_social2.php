<?php
class Socialb {
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

  public function insertSocialb(){
    $data1 = json_decode(file_get_contents("php://input"));
    $s2_link = $data1->s2_link;
    $s2_icons = $data1->s2_icons;
    $stmt1 = $this->db->prepare("INSERT INTO social2 (`s2_link`, `s2_icons`) VALUES ('$s2_link', '$s2_icons')");
    $stmt1->bindParam(':s2_link', $s2_link, PDO::PARAM_STR);
    $stmt1->bindParam(':s2_icons', $s2_icons, PDO::PARAM_STR);
    $stmt1->execute(array(":s2_link" => $s2_link, ":s2_icons" => $s2_icons));
    }

   public function selectSocialb(){
    $stmt2 = $this->db->prepare("SELECT * FROM social2");
    $stmt2->execute();
    $info2 = array();
    while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
    $info2[] = array("s2_id"=>$row2['s2_id'], "s2_link"=>$row2['s2_link'], "s2_icons"=>$row2['s2_icons']);
    }
    $json2 = json_encode($info2);
    return $json2;
    }

    public function updateSocialb(){
      $data2 = json_decode(file_get_contents("php://input"));
      $s2_id = $data2->s2_id;
      $s2_link = $data2->s2_link;
      $s2_icons = $data2->s2_icons;
     $stmt3 = $this->db->prepare("UPDATE social2 SET s2_link='$s2_link', s2_icons='$s2_icons' WHERE s2_id = '$s2_id'");
     $stmt3->bindParam(':s2_id', $s2_id, PDO::PARAM_STR);
     $stmt3->bindParam(':s2_link', $s2_link, PDO::PARAM_STR);
     $stmt3->bindParam(':s2_icons', $s2_icons, PDO::PARAM_STR);
     $stmt3->execute(array(":s2_id" => $s2_id, ":s2_link" => $s2_link, ":s2_icons" => $s2_icons));
     }

     public function deleteSocialb(){
      $data1 = json_decode(file_get_contents("php://input"));

      if(count($data1) > 0){
      $s2_id = $data1->s2_id;
      $stmt4 = $this->db->prepare("DELETE FROM social2 WHERE s2_id = '$s2_id'");
      $stmt4->bindParam(":s2_id", $s2_id, PDO::PARAM_STR);
      $stmt4->execute();
      }

      }

}
