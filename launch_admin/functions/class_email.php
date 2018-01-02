<?php
class Email {
    // Database credentials
    private $dbHost     = '127.0.0.1';
    private $dbUsername = 'root';
    private $dbPassword = '';
    private $dbName     = 'angularjs';
    public $db;

    public function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            try{
                $conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword);
                $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db = $conn;
            }catch(PDOException $e){
                die("Failed to connect with MySQL: " . $e->getMessage());
            }
        }
    }

     public function insertEmails(){
        $data1 = json_decode(file_get_contents("php://input"));
        $email = $data1->email;
        $btn_name = $data1->btnName;

        if($btn_name == "SEND"){
          $stmt1 = $this->db->prepare("INSERT INTO email_list (`email`) VALUES ('$email')");
          $stmt1->bindParam(':email', $email, PDO::PARAM_STR);
          $stmt1->execute();
        }
      }

    public function SelectEmails(){
    $stmt2 = $this->db->prepare("SELECT * FROM email_list");
    $stmt2->execute();
    $info2 = array();
    while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
    $info2[] = array("id"=>$row2['id'], "email"=>$row2['email']);
    }
    $json2 = json_encode($info2);
    return $json2;
  }

    public function DeleteEmails(){
        $stmt3 = $this->db->prepare("DELETE FROM email_list");
        $stmt3->execute();
  }

}
