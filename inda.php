<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="container" align="center">
  	<h2 align="center"> auto Upload file </h2>
  	<br><br>
  	<label>Select Image</label>
  	<input class="form-control" type="file" name="file" id="file" style="width: 50%;" />
    <input type="button" name="sub" class="btn btn-success" id="sub" value="Upload" onclick="go_in();">
     <label for = "name">Player Details</label>
     <textarea  id="listMe" name="listMe" class = "form-control" rows = "3" placeholder = "Player Details" style="width: 50%;"></textarea>

     <input type="button" name="show" class="btn btn-success" id="show" value="show" onclick="displayAll();">
    
  	<br/>
  	<span id="uploaded_image"></span>

    <span id="display_records">gjgjg</span>
  </div>
</body>
</html>

<script type="text/javascript">
	
  function displayAll(){

      $.ajax({
              url:"upload.php",
              method:"GET",
              data:{action:"displayAll"},
            
              success:function(response)
              {
                   var ret = JSON.parse(response)
                 // $('#display_records').html(response);
                  console.log(ret);
              }
             })
  
}
  function go_in(){
    var formData = new FormData();
  var fileUpload = $("#file").get(0);
  var files = fileUpload.files[0];
  
     formData.append('file',files);
     formData.append('action','displayPictureOnFontEnd');
     formData.append('texts',$("#listMe").val());    
     

             $.ajax({
              url:"upload.php",
              method:"POST",
              data:formData,
              contentType:false,
              cache:false,
              processData:false,
              beforeSend:function(){
                  $("#uploaded_image").html("<label class='text-success'>image uploading....</label>");
              },
              success:function(response)
              {
                  $('#uploaded_image').html(response);
              }
             })
          
  }
</script>