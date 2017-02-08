<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact an Administrator</title>
<?php include 'stylesheet.php';?>
</head>

<body>
<?php include 'header.php';?>
<div class="container">
<form method="post">
	</br>
<p>
	<label class="mr-sm-2">Please enter your email</label>
	<input type="email" name="email" value=""/><br /><br />
</p>

<p>
	<label class="mr-sm-2">Please Specify Contact Reason</label>
	<select name="reason">
		<option value="creation">Profile Creation</option>
		<option value="upload">File Upload</option>
		<option value="login">Login</option>
		<option value="other">Other</option>
	</select>
</p>

<p>
	<label class="mr-sm-2">Please specify your concerns here</label><br/>
	<textarea class="form-control" name="textAreaField" id="textAreaField" rows="4" cols="50"></textarea>
</p>
<p>
	<input class="btn btn-secondary" type="submit" name="submit" value="submit"/>
</p>

</form>
	</div>
	
<?php include "footer.php"?>
</body>
</html>
