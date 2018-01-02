<?php
class Duedate {
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

  public function updateDuedate(){
    $data1 = json_decode(file_get_contents("php://input"));
    $d_id = $data1->d_id;
    $year = $data1->year;
    $month = $data1->month;
    $day = $data1->day;
    $stmt1 = $this->db->prepare("UPDATE duedate SET year='$year', month='$month', day='$day' WHERE d_id = '$d_id'");
    $stmt1->bindParam(':d_id', $d_id, PDO::PARAM_STR);
    $stmt1->bindParam(':year', $year, PDO::PARAM_STR);
    $stmt1->bindParam(':month', $month, PDO::PARAM_STR);
    $stmt1->bindParam(':day', $day, PDO::PARAM_STR);
    $stmt1->execute(array(":d_id" => $d_id, ":year" => $year, ":month" => $month, ":day" => $day));
    }

   public function selectDuedate(){
    $stmt2 = $this->db->prepare("SELECT * FROM duedate");
    $stmt2->execute();
    $info2 = array();
    while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
    $info2[] = array("d_id"=>$row2['d_id'], "year"=>$row2['year'], "month"=>$row2['month'], "day"=>$row2['day']);
    }
    $json2 = json_encode($info2);
    return $json2;
  }

}
