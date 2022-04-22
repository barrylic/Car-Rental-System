<?php
class Mysql{
    private $host;
    private $root;
    private $passwords;
    private $database;

    
    function __construct($host,$root,$passwords,$database){
        $this->host = $host;        
        $this->root = $root;
        $this->passwords = $passwords;
        $this->database = $database;
        $this->connect();
    }

    function connect(){
       $this->conn=mysqli_connect($this->host,$this->root,$this->passwords);	
        mysqli_query($this->conn,"set names utf8");							
        mysqli_select_db($this->conn,$this->database);						
    }
	
	
    function query($sql){
        return mysqli_query($this->conn,$sql);
    }
	
    function rows($result){
        return mysqli_num_rows($result);
    }
	
    function selectbyUser($table,$username){
        return $this->query("SELECT * FROM $table where username='$username'");
    }
	
    function insert($table,$username,$password,$email,$age,$phone){
        $this->query("INSERT INTO $table (username,password,email,age,phone) VALUES ('$username','$password','$email','$age','$phone')");
    }

    function assoc($result){
        return mysqli_fetch_assoc($result);
    }

    function dbClose(){
        mysqli_close($this->conn);
    }
	
	
}
$db = new Mysql("localhost","zsun5","zsun5","zsun5");
?>
