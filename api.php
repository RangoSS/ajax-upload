<?php

include "connection.php";

  class Uploading extends Connecting {
       
  var  $first_name="";
   var $last_name="";
  var  $user_email="";
   var $p_password="";
   var $home_address="";
   var $cellphone="";
   var $postal_address="";
  var  $locations="";
   var $user_type="";
  var  $gender="";
  //var $files_image="";

  function __construct(){

      $this->first_name=$_POST['first_name'];
    $this->last_name=$_POST['last_name'];
    $this->user_email=$_POST['user_email'];
    $this->p_password=$_POST['p_password'];
    $this->home_address=$_POST['home_address'];
    $this->cellphone=$_POST['cellphone'];
    $this->postal_address=$_POST['postal_address'];
    $this->locations=$_POST['locations'];
    //$this->user_type=$_POST['user_type'];
    $this->gender=$_POST['gender'];
  // $this->files_image=$_POST['files_image'];

  }

       function getconn($query){

    $con=$this->getConnection();
    $data=mysqli_query($con,$query);
    return $data;
   }


   function listall(){
   	$info=array();
   	$sql="SELECT * FROM user";
   	$dbs=$this->getconn($sql);
   	while($results=mysqli_fetch_assoc($dbs)){
   		$info[]=$results;
   	 
   	}
    echo json_encode($info);
    return $info;
   }
   
    function insertings(){
    
    
  /*  $files_image=$_FILES['files_image']['name'];
  $target="images/" .basename($_FILES['files_image']['name']); //first we create images folder in the project 
                                                         // goes to file and file name
$imagePath = "http://localhost/BARTEXBATER2/".$target; 
     //we save path of file in sql
if(move_uploaded_file($_FILES['files_image']['tmp_name'], $target))    //tmp is a temporarly folder that saves temporal files 
  {
    $msg="uploaded successfully";
  }
  else
  {
    $msg="there was an error uploading file";
  }*/

    $sql="INSERT INTO user(first_name,last_name,user_email,p_password,home_address,cellphone,postal_address,locations,user_type,gender)
           VALUES('$this->first_name','$this->last_name','$this->user_email','$this->p_password','$this->home_address','$this->cellphone','$this->postal_address','$this->locations','$this->user_type','$this->gender')";

   $dbs=$this->getconn($sql);
   if($dbs){
    echo "row has been inserted";
   }



    }
   }//end class

  if(isset($_POST['action']))
{
  $action = $_POST['action'];

  if($action == 'insertings'){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $user_email=$_POST['user_email'];
    $p_password=$_POST['p_password'];
    $home_address=$_POST['home_address'];
    $cellphone=$_POST['cellphone'];
    $postal_address=$_POST['postal_address'];
    $locations=$_POST['locations'];
    $user_type=$_POST['user_type'];
    $gender=$_POST['gender'];
    //$files_image=$_POST['files_image'];


    $api_object=new Uploading();
    $api_object->insertings();
  
  }
}


if(isset($_GET['action']))
{
  $action = $_GET['action'];

  if($action == 'listall')
  {
        

    $api_object=new Uploading();
    $api_object->listall();
  }
}
?>
