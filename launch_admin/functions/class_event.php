<?php
class Event {
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

  public function insertEvent(){
    $data1 = json_decode(file_get_contents("php://input"));
    $event_name = $data1->event_name;
    $datepicker = $data1->datepicker;
    $datepicker = date('Y-m-d', strtotime($datepicker));
    $stmt1 = $this->db->prepare("INSERT INTO schedule (`event_name`, `datepicker`) VALUES ('$event_name', '$datepicker')");
    $stmt1->bindParam(':event_name', $event_name, PDO::PARAM_STR);
    $stmt1->bindParam(':datepicker', $datepicker, PDO::PARAM_STR);
    $stmt1->execute();
    }

   public function selectEvent(){
    $stmt2 = $this->db->prepare("SELECT * FROM schedule");
    $stmt2->execute();
    $info2 = array();
    while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
    $info2[] = array("e_id"=>$row2['e_id'], "event_name"=>$row2['event_name'], "datepicker"=>$row2['datepicker']);
    }
    $json2 = json_encode($info2);
    return $json2;
    }

     public function deleteEvent(){
      $data3 = json_decode(file_get_contents("php://input"));

      if(count($data3) > 0){
      $e_id = $data3->e_id;
      $stmt4 = $this->db->prepare("DELETE FROM schedule WHERE e_id = '$e_id'");
      $stmt4->bindParam(":e_id", $e_id, PDO::PARAM_STR);
      $stmt4->execute();
      }

      }

}
