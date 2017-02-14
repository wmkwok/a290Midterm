<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Profile</title>
<?php include 'stylesheet.php';?>
</head>
<body>
<?php include 'header.php';?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
	<h1 class="display-3">Profile Creation</h1>
	<p class="lead">Tell us some things about yourself!</p>
  </div>
</div>


<?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){
   //get all posted variables
   $name = sanitize(($_POST["name"]));
   $email = $_POST["email"];
   $username = sanitize($_POST["username"]);
   $password = sanitize($_POST["password"]);
   $repeat = sanitize($_POST["repeatPass"]);
   $type = sanitize($_POST["schoolType"]);
   $level = sanitize($_POST["schoolLevel"]);
   $state = sanitize($_POST["state"]);

   //connect to mysql
   mysql_connect("localhost", 'root', "a290php") or die(mysql_error());
   mysql_select_db('resource') or die(mysql_error());
   //query for username 
   $userFind = mysql_query("SELECT * FROM users WHERE username='$username'") or die(mysql_error());
	   //check passwords
	   if($password != $repeat){
		   echo "Oops! Your passwords don't match!";
	   }
	   //if no results come up
	   elseif(mysql_num_rows($userFind) == 0){
		   //do the insert magic here and give the user a chocolate chip cookie
		   $password = password_hash($password, PASSWORD_DEFAULT);
		   $addUser = "INSERT INTO users (username, name, email, password, schooltype, schoollevel, state) VALUES ('$username', '$name', '$email', '$password', '$type', '$level', '$state')";
		   mysql_query($addUser) or die(mysql_error());
		   mysql_close();
		   echo "<div class=\"alert alert-success\"><strong>Profile Creation Success!</strong></div>";			   

	   }
	   else{
		    echo "<div class=\"alert alert-warning\"><strong>Username already in use.</strong></div>";
	   }
   }
	
function sanitize($data) {
  $data = trim($data); //Strip whitespace (or other characters) from the beginning and end of a string
  $data = stripslashes($data); //Un-quotes a quoted string
  $data = htmlspecialchars($data); //
  if (isset($data)) 
  { return $data; }
}
?>

<div class="container">
  <form method="post">
    <div class="form-group">
      <label class="mr-sm-2">Name</label>
      <input type="text" required="required" class="form-control" name="name" value="" minlength="4" maxlength="30"/><br>
      <label class="mr-sm-2">Username</label>
      <input type="text" required="required" class="form-control" name="username" value="" minlength="5" maxlength="20"/>
      <label class="mr-sm-2">Email Address</label>
      <input type="email" required="required" class="form-control" name="email" value="" maxlength="60"/>
      <label class="mr-sm-2">Password (8-16 characters, numbers and letters only)</label>
      <input type="password" required="required" class="form-control" minlength="8" maxlength="16" name="password" value=""/>
      <label class="mr-sm-2">Repeat Password</label>
      <input type="password" required="required" class="form-control" minlength="8" maxlength="16" name="repeatPass" value=""/>
    </div>
	
    <div class="form-group">
      <label class="mr-sm-2">School Type</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" required name="schoolType">
	<option disabled selected value>Select</option>
	<option value="public">Public</option>
	<option value="private">Private</option>
	<option value="charter">Charter</option>
	<option value="techCenter">Technology Center</option>
	<option value="other">Other</option>
      </select>

      <label class="mr-sm-2">School Level</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" required name="schoolLevel">
	<option disabled selected value>Select</option>
	<option value="preschool">Pre-school</option>
	<option value="elementary">Elementary School</option>
	<option value="middle">Middle School</option>
	<option value="high">High School</option>
    <option value="college">College</option>
      </select>

      <label class="mr-sm-2">State</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" required name="state">
	<option disabled selected value>Select</option>
	<option value="indiana">Indiana</option>
	<option value="illinois">Illinois</option>
	<option value="ohio">Ohio</option>
	<option value="other">Other</option>
      </select>
    </div>
    <input type="submit" class="btn btn-secondary" name="submit" value="Submit"/>
  </form>
</div>



	
<?php include 'footer.php';?>
</body>
</html>
