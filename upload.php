<?php
/*class Connecting {

var $host="localhost";
var $user="root";
var $password="";
var $db_table="barter";


public function getConnection(){

$conn=mysqli_connect($this->host,$this->user,$this->password,$this->db_table) or
die("u are not connected"); 


if(!$conn){ echo 'you are not in'; } return $conn;
} 
}
 */

if($_FILES["file"]["name"] != '')

{
 $test= explode(".", $_FILES["file"]["name"]);
 $extention =end($test);
 $name=rand(100,999).'.'. $extention;
 $location='./upload/'.$name;
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
 echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail"/>';
}
 ?>


