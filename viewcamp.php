<?php
$conn=mysqli_connect("localhost","root","") or die("Could not connect");
$db=mysqli_select_db($conn,"bloodbank") or die ("No database");
$sql="select * from camp";
$records=mysqli_query($conn,$sql)or die (mysqli_error());
?>
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
	<br><br><br><br><br><br><br><br>
      
			<center>
			<div class="Table">
            <table class="table table-bordered" width="50">
			  <tr>

	    <th style="background:green"><font color="black">CampId</font></th>
        <th style="background:green"><font color="black">CampName</font></th>
        <th style="background:green"><font color="black">OrganisedBy</font></th>
        <th style="background:green"><font color="black">State</font></th>
		<th style="background:green"><font color="black">City</font></th>
		<th style="background:green"><font color="black">Details</font></th>
      </tr>
			
			<?php
			
			while($viewcamp=mysqli_fetch_array($records))
		    {
				echo "<tr>";
				echo "<td style='background:white'>".$viewcamp['Id']."</td>";
				echo "<td style='background:white'>".$viewcamp['Name']."</td>";
				echo "<td style='background:white'>".$viewcamp['Organisation']."</td>";
				echo "<td style='background:white'>".$viewcamp['State']."</td>";
				echo "<td style='background:white'>".$viewcamp['City']."</td>";
				echo "<td style='background:white'>".$viewcamp['Details']."</td>";
		        echo "</tr>";
			}
			mysqli_close($conn);
			?>
			</table>
			</div>
			</center>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
     <div class="col-md-12"><center>
            <label><br><br>Copyright © 2018 </label></center>
        </div><br>
    </footer>
		</body>
		</html>