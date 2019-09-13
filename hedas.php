<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--for icons-->
<link rel="stylesheet" type="text/css" href="css/globals.css">

 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    

<style>
   .logoim {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
} 

.imglogo{
  height: 50px;
  width:70px;
  }
  </style>

</head>
<body>
  
  <div class="container" style="background-color: white">
<nav class="navbar navbar-expand-lg navbar-light " style="border-bottom-style: solid;border-color: green;background-color: white">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li> <img src="images/logo.jpg">
      <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="barter.php">Barter Books</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="service.php">Service</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="recorgnition.php">RECORGNITION AWARDS</a>
      </li>
     <!-- <input class="btn btn-outline-dark font-weight-bold btn-sm" type="submit" value="log in">-->
      <!-------------------------------------------------------------------------------------->
       
       <li class="dropdown"> 
            <!--my user login link-->
            <a href="#" class="dropdown-toggle" data-toggle=".dropdown" onclick="$('#shows').toggle();" aria-expanded="true">
                             <!--here check if session is not emty-->
                          <?php if(isset($_SESSION['usernames']) && $_SESSION['usernames'] != "")
                           { ?>
                             <!--do this only if loged in-->
                            <i class='fas fa-user-tie' style='font-size:20px;margin-top: 10px;'> </i>      
                            <li><a name="sissioning" href="logout.php"><b><u>Logout <?php echo  $usernames; ?></u></b></a></li>

                            <!--else show this if not loged on-->

                            <?php } else { ?>
              <input class="btn btn-outline-dark font-weight-bold btn-sm" type="submit" value="log in">
              <!--<span class="hidden-xs btn-outline-dark">LOG IN</span>--> 
            </a>


            <ul class="dropdown-menu" id="shows">
              <li><a href="login.php"><i id="goToLogin" class="fa fa-fw fa-user"></i> Log in</a></li>
              <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
            </ul>
                        <?php } ?>
          </li>


      <!--------------------------------------------------------------------------------------->
    </ul>
    
  </div>
</nav>
</div>



