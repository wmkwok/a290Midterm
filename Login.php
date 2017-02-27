<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Screen</title>
    <?php include 'stylesheet.php';?>
  </head>

 <body>

<?php include 'header.php';?>

<div class="jumbotron jumbotron-fluid">
      <div class="container">
	<h1 class="display-3">Login</h1>
	<p class="lead">Please enter your username and password to login</p>
      </div>
    </div>

<div class="container">
  <form method="post">
    <div class="form-group">
      
      <label class="mr-sm-2">Username</label>
      <input type="text" class="form-control" name="userName" required="required" value=""/>
     
      <label class="mr-sm-2">Password</label>
      <input type="password" class="form-control" minlength="8" maxlength="16" name="password" value=""/>
      </br>
     <button  class="btn btn-secondary" name="submit" type="submit">Login</button>
	</form>
	 </div>
    </div>
<div id="footer"><?php include "footer.php"?></div> 

<?php  

if(!isset($_POST['submit'])){  
	exit();
}
$username = htmlspecialchars($_POST['userName']);  
$password = strip_tags(($_POST['password']));  
$hash = password_hash($password, PASSWORD_DEFAULT);
		
include('connect.php'); 

mysqli_select_db($conn, "resource");
  
$sql = "SELECT password FROM users WHERE username='$username'";
//echo($sql);
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if(password_verify($password, $row['password'])){
 	session_start();  
    $_SESSION['username'] = $username;  
    header('Location: index.php');
    exit;  
}
else {  
    exit('Login Fails！Click Here <a href="javascript:history.back(-1);">Back</a>');  
}  
    

?>  

</body>

</html>