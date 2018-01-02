<?php
class Login {
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

   public function selectLogin(){

     if(isset($_SESSION["user_name"])){
     header("location: index.php");
     exit();
     }

    if(isset($_POST["user_name"]) && isset($_POST["user_password"])){

    $user_name = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["user_name"]);
    $user_password = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["user_password"]);

    $user_name = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_STRING);
    $user_name = strip_tags(trim($_POST['user_name']));
    $user_password = filter_input(INPUT_POST, 'user_password', FILTER_SANITIZE_STRING);
    $user_password = trim($_POST['user_password']);

    $sql = "SELECT count(*) FROM admin WHERE user_name='$user_name' AND user_password='$user_password'";

    if($stmt = $this->db->prepare($sql)){

    $stmt->execute(array(':user_name' => $user_name, ':user_password' => $user_password));

    $number_of_rows = $stmt->fetchColumn();

    if($number_of_rows == 0){

    die('Incorrect username / password combination! Try again <a href="index.php">Click Here</a>');

    } else{

    $hash = password_hash($user_password, PASSWORD_BCRYPT);

    if($user_name && password_verify($user_password, $hash)){

    $_SESSION["user_id"] = $id;
    $_SESSION["user_name"] = $user_name;
    $_SESSION["user_password"] = $user_password;

    header("location: index.php");
    exit();
    }
    }
    }
    }
    }

     public function selectSession(){

       if (!isset($_SESSION["user_name"])){
           header("location: login.php");
           exit();
       }

       $myuserID = preg_replace('#[^0-9]#i', '', $_SESSION["user_id"]);
       $user_name = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["user_name"]);
       $user_password = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["user_password"]);

       $sql = "SELECT count(*) FROM admin WHERE user_id='$myuserID' AND user_name='$user_name' AND user_password='$user_password'";

       if($stmt = $this->db->prepare($sql)){

       $stmt->execute(array(':user_id' => $myuserID, ':user_name' => $user_name, ':user_password' => $user_password));

       $number_of_rows = $stmt->fetchColumn();

       if($number_of_rows == 1){
       $_SESSION["user_id"];
       $_SESSION["user_name"];
       $_SESSION["user_password"];
       exit();
       }
       }
       }

}
