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
  	<input type="file" name="file" id="file"/>
    <input type="button" name="sub" id="sub" value="Upload" onclick="go_in();">
  	<br/>
  	<span id="uploaded_image"></span>
  </div>
</body>
</html>

<script type="text/javascript">
	

  function go_in(){
    var formData = new FormData();
  var fileUpload = $("#file").get(0);
  var files = fileUpload.files[0];
  
     formData.append('file',files);    

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