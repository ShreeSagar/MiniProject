<?php
   $conn=mysqli_connect("localhost","root","");
   $db=mysqli_select_db($conn,"bloodbank");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      
      $myusername = mysqli_real_escape_string($db,$_POST['Username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']); 
      
      $sql = "SELECT * FROM admin WHERE Username = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         s
         header("location: ../admin/adminhome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>