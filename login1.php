<?php
$Uname =$_GET['Uname'];
$Pass = $_GET['Pass'];
$servername = "localhost";
$username = "root";
$password = '';
// Create connection
$conn = mysqli_connect($servername, $username, $password,'isalab');
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM lab where Uname='$Uname' AND Pass='$Pass' "; //20BCE2210
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
 echo 'Success you have logged in!';
 
 
}
else{
 echo 'Failure, try again';
 
}
?>