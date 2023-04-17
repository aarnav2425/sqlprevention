<?php
$uname =$_POST['uname'];
$pass = $_POST['pass'];
// Create connection
/*$conn = mysqli_connect('localhost', 'root',
'','infosec');
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}*/
$db_connection = mysqli_connect("localhost", "root","", "infosec");
$username = mysqli_real_escape_string($db_connection,
$_POST['uname']);
$password = mysqli_real_escape_string($db_connection,
$_POST['pass']);
$query = "SELECT * FROM details WHERE uname = '" .
$username. "' AND pass = '" . $password . "'";
//$sql="SELECT * FROM details where username='$uname AND password='$pass' ";
$result = mysqli_query($db_connection,$query);
if (!$result) {
printf("Error: %s\n",
mysqli_error($db_connection));
exit();
}
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'success';
}
else{
echo 'Failure';
}
?>