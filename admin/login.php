<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"bloodbank");
?>
<?php   
if(isset($_POST['login'])) 
{  
    $admin_name=$_POST['Username'];  
    $admin_pass=$_POST['Password'];  
  
    $admin_query="select * from admin where admin_name='$Username' AND admin_pass='$Password'";  
  
    $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
  
        echo "<script type='text/javascript'>document.location='admin/adminhome.html'</script>";  
    }  
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}  
  
}  
  
?> 