<?php
class Header {
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

  public function updateHeaders(){
    $data1 = json_decode(file_get_contents("php://input"));
    $h_id = $data1->h_id;
    $title = $data1->title;
    $info1 = $data1->info1;
    $info2 = $data1->info2;
    $info3 = $data1->info3;
    $footer1 = $data1->footer1;
    $footer2 = $data1->footer2;
    $stmt1 = $this->db->prepare("UPDATE header SET title='$title', info1='$info1', info2='$info2', info3='$info3', footer1='$footer1', footer2='$footer2' WHERE h_id = '$h_id'");
    $stmt1->bindParam(':h_id', $h_id, PDO::PARAM_STR);
    $stmt1->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt1->bindParam(':info1', $info1, PDO::PARAM_STR);
    $stmt1->bindParam(':info2', $info2, PDO::PARAM_STR);
    $stmt1->bindParam(':info3', $info3, PDO::PARAM_STR);
    $stmt1->bindParam(':footer1', $footer1, PDO::PARAM_STR);
    $stmt1->bindParam(':footer2', $footer2, PDO::PARAM_STR);
    $stmt1->execute(array(":h_id" => $h_id, ":title" => $title, ":info1" => $info1, ":info2" => $info2, ":info3" => $info3, ":footer1" => $footer1, ":footer2" => $footer2));
    }

   public function selectHeaders(){
    $stmt2 = $this->db->prepare("SELECT * FROM header");
    $stmt2->execute();
    $info2 = array();
    while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
    $info2[] = array("h_id"=>$row2['h_id'], "title"=>$row2['title'], "info1"=>$row2['info1'], "info2"=>$row2['info2'], "info3"=>$row2['info3'], "footer1"=>$row2['footer1'], "footer2"=>$row2['footer2']);
    }
    $json2 = json_encode($info2);
    return $json2;
  }

}
