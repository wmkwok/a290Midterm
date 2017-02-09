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
      <input type="text" class="form-control" name="name" value=""/><br>
      <label class="mr-sm-2">Username</label>
      <input type="text" class="form-control" name="userName" value=""/>
      <label class="mr-sm-2">Email Address</label>
      <input type="email" class="form-control" name="email" value=""/>
      <label class="mr-sm-2">Password (8-16 characters, numbers and letters only)</label>
      <input type="password" class="form-control" minlength="8" maxlength="16" name="password" value=""/>
      <label class="mr-sm-2">Repeat Password</label>
      <input type="password" class="form-control" minlength="8" maxlength="16" name="repeatPass" value=""/>
    </div>
	
    <div class="form-group">
      <label class="mr-sm-2">School Type</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="schoolType">
	<option value="select">Select</option>
	<option value="public">Public</option>
	<option value="private">Private</option>
	<option value="charter">Charter</option>
	<option value="techCenter">Technology Center</option>
	<option value="other">Other</option>
      </select>

      <label class="mr-sm-2">School Level</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="schoolLevel">
	<option value="select">Select</option>
	<option value="preschool">Pre-school</option>
	<option value="elementary">Elementary School</option>
	<option value="middle">Middle School</option>
	<option value="high">High School</option>
      </select>

      <label class="mr-sm-2">State</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="state">
	<option value="select">Select</option>
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
