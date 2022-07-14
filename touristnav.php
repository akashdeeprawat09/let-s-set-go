<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(isset($_SESSION['loginemail']))
{
	$email=$_SESSION['loginemail'];
}
?>
<!--DOCTYPE html-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
#a,#b
{
  color:white;
}
#a:hover{
  text-decoration: none;
  font-weight: bold;
}
#b:hover{color:black;font-weight: bold;}
</style>
</head>
<body>
<div class="container-fluid" style="background-color:#162558;margin-top:1%;">
  <br>
  <div class="row">
  <div class="col-md-3"><p style="color:white;margin-top:-3%;"><a href="index.php"><img src="logo1.png" width="150" height="100" /></a></p></div>
  <div class="col-md-1"><a href="touristdashboard.php" id="a"><span id="a" class=" glyphicon glyphicon-home"></span> Dashboard</a></div>
  <div class="col-md-1"><a href="index.php" id="a"><span id="a" class=" glyphicon glyphicon-home"></span> Home</a></div>
  <div class="col-md-1"><a href="expensecalculator.php" id="a"><span id="a" class="glyphicon glyphicon-th"></span> Expense Calculator</a></div>
	<!-- <div class="col-md-1"><a href="chathome.php" id="a"><span id="a" class="glyphicon glyphicon-th"></span> Personal Chat</a></div> -->
	<div class="col-md-1"><a href="se1.php" id="a"><span id="a" class="glyphicon glyphicon-th"></span>Share Experience</a></div>
	
	
	<div class="col-md-1">
      <div class="dropdown" style="margin-top:0%;">
        <a href="" class="dropdown-toggle"  data-toggle="dropdown" id="a" >Account</a>
        <div class="dropdown-menu"  style="background-color:#162558;opacity:0.9;">
          <p style="color:white;text-align:center;font-weight:bold;"><?php echo "Hello ".$email;?></p> <!--for displaying name-->
          <a class="dropdown-item" id="b" href="touristsettings.php"><span class="glyphicon glyphicon-cog"></span> Profile settings</a>
          <a class="dropdown-item" id="b" href="logout.php"><span class=" 	glyphicon glyphicon-log-out"></span> Logout</a>
        </div>
      </div>
    </div>
	

	<div class="search-container" >
     <form action="search_.php" method="POST">
      <input type="text" placeholder="Search.." name="loc">
      <button type="submit"><i class="fa fa-search"></i></button>
     </form>
    </div>
	
  </div>
  <br></div>
</body>
</html>