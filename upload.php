<?php
include "connection.php";

class Api extends Connecting {

//this code here is for upload file only
function displayPictureOnFontEnd(){

if($_FILES["file"]["name"] != '')
{
 $test= explode(".", $_FILES["file"]["name"]);
 $extention =end($test);
 $name=rand(100,999).'.'. $extention;
 $location='./upload/'.$name;
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);//here we move file to a new location
 echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail"/>';
}
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
		$api_object=new Api();
		$api_object->displayPictureOnFontEnd();
	}
}   
 

