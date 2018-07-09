<?php
$username = $_POST['username'];
$password = $_POST['password'];
$con=mysqli_connect("localhost","root","","hotel");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
$qz = "SELECT id FROM signup where username='".$username."' and password='".$password."'" ; 
$qz = str_replace("\'","",$qz); 
$result = mysqli_query($con,$qz);
while($row = mysqli_fetch_array($result)){
 
 setcookie("username", "$username", time()+ 60,'/'); // expires after 60 seconds
     echo 'the cookie has been set for 60 seconds';
     header("location:mainpage.php");
  }

 echo "Wrong password or username";
mysqli_close($con);
}
?>