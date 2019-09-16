<?php
include "connection.php";

class Api extends Connecting {
 
 var $texts;
  var $location="";
           
  function __construct(){

  	  $this->texts=$_POST['texts'];
  }
//this code here is for upload file only
function displayPictureOnFontEnd(){

$image_file=$_FILES["file"]["name"];

$dir="upload/".basename($_FILES["file"]["name"]);
 $location='http://localhost/upload/'.$dir;
 move_uploaded_file($_FILES["file"]["tmp_name"], $dir);//here we move file to a new location

 $sql="INSERT INTO driver(images,texts) VALUES('$location','$this->texts')";
  $results=$this->getConn($sql);


 

}


function getConn($query){

	$con=$this->getConnection();
     $results=mysqli_query($con,$query);
     return  $results;
}

function displayAll(){
	$sql="SELECT images,texts from driver";
	$results=$this->getConn($sql);
	$info=array();
	while($row=mysqli_fetch_assoc($results))
	{
       $info[]=$row;

	}
	echo json_encode($info);
	return  $info;

}


}
 
if(isset($_GET['action']))
{
	$action = $_GET['action'];

	if($action == 'displayAll')
	{
		$api_object=new Api();
		$api_object->displayAll();
	}

}


if(isset($_POST['action'])){
	$action=$_POST['action'];

	 if($action == 'displayPictureOnFontEnd')
	{
		$texts=$_POST['texts'];
		$api_object=new Api();
		$api_object->displayPictureOnFontEnd();
	}


}   
 

