<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Profile</title>
<?php include 'stylesheet.php';?>
</head>
<body>
<?php include 'header.php';?>

<div class="container">
  <form method="post">
    <div class="form-group">
      <label class="mr-sm-2">Name</label>
      <input type="text" required="required" class="form-control" name="name" value=""/><br>
      <label class="mr-sm-2">Username</label>
      <input type="text" required="required" class="form-control" name="userName" value=""/>
      <label class="mr-sm-2">Email Address</label>
      <input type="email" required="required" class="form-control" name="email" value=""/>
      <label class="mr-sm-2">Password (8-16 characters, numbers and letters only)</label>
      <input type="password" required="required" class="form-control" minlength="8" maxlength="16" name="password" value=""/>
      <label class="mr-sm-2">Repeat Password</label>
      <input type="password" required="required" class="form-control" minlength="8" maxlength="16" name="repeatPass" value=""/>
    </div>
	
    <div class="form-group">
      <label class="mr-sm-2">School Type</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" required="required" name="schoolType">
	<option disabled selected value>Select</option>
	<option value="public">Public</option>
	<option value="private">Private</option>
	<option value="charter">Charter</option>
	<option value="techCenter">Technology Center</option>
	<option value="other">Other</option>
      </select>

      <label class="mr-sm-2">School Level</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" required="required" name="schoolLevel">
	<option disabled selected value>Select</option>
	<option value="preschool">Pre-school</option>
	<option value="elementary">Elementary School</option>
	<option value="middle">Middle School</option>
	<option value="high">High School</option>
    <option value="college">College</option>
      </select>

      <label class="mr-sm-2">State</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" required="required" name="state">
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

<?php
   if(isset($_POST["submit"])){
   //get all posted variables
   $name = test_input($_POST["name"]);
   $email = $_POST["email"];
   $username = test_input($_POST["username"]);
   $password = test_input($_POST["password"]);
   $repeat = test_input($_POST["repeatPass"]);
   $type = test_input($_POST["schoolType"]);
   $level = test_input($_POST["schoolLevel"]);
   $state = test_input($_POST["state"]);



   //connect to mysql
   mysql_connect("localhost", 'root', "") or die(mysql_error());
   mysql_select_db('resource') or die(mysql_error());
   $userFind = mysql_query("SELECT FROM users (username) WHERE username=$username");
	   if($userFind){
		   echo "name already exists";
	   }
	   elseif($password != $repeat){
		   echo "Opps! Your passwords don't match!";
	   }
	   else{
		   //do the insert magic here and give the user a chocolate chip cookie
		   $addUser = "INSERT INTO users (username, name, email, password, schooltype, schoollevel, state) VALUES ('$username', '$name', '$email', '$password', '$type', '$level', '$state')";
		   mysql_query($addUser) or die(mysql_error());
		   mysql_close();
		   echo "Sucess! You are signed up!";
	   }
   }

//query for taken username
   //check password for valid input
   //check password for equal repeat
   //add info to database



// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $password = test_input($_POST["password"]);
  $repeat = test_input($_POST["repeatPass"]);
}

function test_input($data) {
  $data = trim($data); //Strip whitespace (or other characters) from the beginning and end of a string
  $data = stripslashes($data); //Un-quotes a quoted string
  $data = htmlspecialchars($data); //
  if (isset($data)) 
  { return $data; }

}

   ?>
	
<?php include 'footer.php';?>
</body>
</html>
