<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Profile</title>
<?php include 'stylesheet.php'; include 'state.php'?>
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
include "connect.php";

  //if post then get all the data from the forms
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       //get all posted variables
       $name = sanitize(($_POST["name"]));
       $email = $_POST["email"];
       $username = sanitize($_POST["username"]);
       $password = sanitize($_POST["password"]);
       $repeat = sanitize($_POST["repeatPass"]);
       $type = sanitize($_POST["schoolType"]);
       $level = sanitize($_POST["schoolLevel"]);
       $conn = mysqli_connect("localhost", 'root', "a290php") or die(mysqli_error($conn));
       $bio= mysqli_real_escape_string($conn, sanitize($_POST["bio"]));
       $state = sanitize($_POST["state"]);


   //connect to mysql

       mysqli_select_db($conn, 'resource') or die(mysqli_error($conn));
   //query for username
   $userFind = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'") or die(mysqli_error($conn));
       //check passwords
       if ($password != $repeat) {
           echo "Oops! Your passwords don't match!";
       }
       //if no results come up
       elseif (mysqli_num_rows($userFind) == 0) {
           //do the insert magic here and give the user a chocolate chip cookie :D
           $password = password_hash($password, PASSWORD_DEFAULT);
           $addUser = "INSERT INTO users (username, name, email, password, schooltype, schoollevel, state, bio) VALUES ('$username', '$name', '$email', '$password', '$type', '$level', '$state', '$bio')";
           mysqli_query($conn, $addUser) or die(mysqli_error($conn));
           mysqli_close($conn);
           echo "<div class=\"alert alert-success\"><strong>Profile Creation Success!</strong></div>";
       } else {
           echo "<div class=\"alert alert-warning\"><strong>Username already in use.</strong></div>";
       }
   }

  //function to clean inputs alittle
function sanitize($data)
{
    $data = trim($data); //Strip whitespace (or other characters) from the beginning and end of a string
  $data = stripslashes($data); //Un-quotes a quoted string
  $data = htmlspecialchars($data); //
  if (isset($data)) {
      return $data;
  }
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
      </select><br><br>

      <label class="mr-sm-2">State</label>
      <select class = "custom-select mb-2 mr-sm-2 mb-sm-0" name="state"><?php echo StateDropdown("Indiana", 'name'); ?></select>
      <br>
    </div>

    <div class="form-group">
  	  <label for="bio">Bio:</label>
  	  <textarea class="form-control" maxlength="255" rows="3" name="bio" id="bio"></textarea>
	</div>

    <input type="submit" class="btn btn-secondary" name="submit" value="Submit"/>
  </form>
</div>



	<br/>
<?php include 'footer.php';?>
</body>
</html>
