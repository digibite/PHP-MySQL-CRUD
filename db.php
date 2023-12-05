<?php

// simple DB connection. Will be used for the simulate JSON CRUD operations
// In a production environment we would use only one of these two or PDO.
$dbHost = 'localhost:3306';
$dbUser = 'root';
$dbPass = '';
$db = 'test';

$dbConn = mysqli_connect($dbHost, $dbUser, '', $db) or die('MySQL connect failed. ' . mysqli_connect_error());

// Reusable funcs to no repeat myself so much :D
function dbQuery($sql) {
	global $dbConn;
	$result = mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));
	return $result;
}

function dbFetchAssoc($result) {
	return mysqli_fetch_assoc($result);
}

function closeConn() {
	global $dbConn;
	mysqli_close($dbConn);
}

// more complex and secure DB connection using OOP. This one will be used for user authentication.
Class Database{
    public $host = 'localhost:3306';
    public $user = 'root';
    public $pass = '';
    public $dbname = 'test';
        
    public $link;
    public $error;
        
    public function __construct(){
       $this->connectDB();
    }

    private function connectDB(){

    $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    
      if(!$this->link){
      $this->error ='Connection fail'.$this->link->connect_error;
     return false;
      }
    }

    public function select($query){

       $result = $this->link->query($query) or die($this->link->error.__LINE__);
        if($result->num_rows > 0){
         return $result;
         } else {
         return false;
        }
       }
    }