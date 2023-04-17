<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>    
<body> 
<img src="vitlogo.png" alt="centred-image">   
    <h1>20BCE2210 ISA</h1>
    <h2>Login gateway</h2><br>    
    <div class="login">    
    <form id="login" method="get" action="login1.php">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username" 
        ="<?php if (array_key_exists('Uname', $_POST)) {
         echo $_POST['Uname']; 
 
}
?>">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password"  
        value= "<?php if (array_key_exists('Pass', $_GET)) {
        echo $_GET['Pass'];
        } 
?>">  <br><br>    
      <button>Submit</button> 
        
    </form>     
</div>    
</body>    
</html>   