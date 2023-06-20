<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>
<style>
h1{
font-size:4em;
}
h2{
font-size:3em;
}
body{
 background: url(assets/img/header.jpg)fixed;
 
  -webkit-background-size:cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size:cover;
}
</style>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><font color="white">Blood Bank</font><br></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
				 <li class="active"><a href="../MiniProject/homepage.html"><font color="white"><b>Home</b></font></a></li>
                    </ul><div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                       
						
                    </ul>

					

            </div>
            </div>
        </div>
    </nav>
	<br><br><br><br><br>
	<div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        
       
        
        <div class="panel panel-default">
            <div class="panel-heading">
                
                             
            </div>
            <div class="panel-body">
<?php
$name=$_REQUEST['Name'];
$email=$_REQUEST['Email'];
$dob=$_REQUEST['Requireddate'];
$gender=$_REQUEST['Gender'];
$bloodgroup=$_REQUEST['Bloodgroup'];
$address=$_REQUEST['Address'];
$city=$_REQUEST['City'];
$mobileno=$_REQUEST['Mobileno'];
$link = mysqli_connect("localhost", "root", "", "bloodbank");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "INSERT INTO reciever values('$name','$email','$dob','$gender','$bloodgroup','$address','$city','$mobileno')";
if(mysqli_query($link, $sql)){
    echo "Request sent.";
} else{
    echo "ERROR:Failed to register $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
     </div>
        </div>
    </div></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
     <div class="col-md-12"><center>
            <label><br><br><br>Copyright © 2018 </label></center>
        </div><br>
    </footer>	   
</body>

</html>