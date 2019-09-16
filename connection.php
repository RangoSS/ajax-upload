<?php

class Connecting {

var $host="localhost";
var $user="root";
var $password="";
var $db_table="cars";


public function getConnection(){

$conn=mysqli_connect($this->host,$this->user,$this->password,$this->db_table) or
die("u are not connected"); 


if(!$conn){ echo 'you are not in'; } return $conn;
} 
}
 ?>