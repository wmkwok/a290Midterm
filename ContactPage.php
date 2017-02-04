<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact an Administrator</title>
</head>

<body>
<form method="post">
<p>
	<label>Please enter your email</label>
	<input type="email" name="email" value=""/><br /><br />
</p>

<p>
	<label>Please Specify Contact Reason</label>
	<select name="reason">
		<option value="creation">Profile Creation</option>
		<option value="upload">File Upload</option>
		<option value="login">Login</option>
		<option value="other">Other</option>
	</select>
</p>

<p>
	<label>Please specify your concerns here</label><br/>
	<textarea name="textAreaField" id="textAreaField" rows="4" cols="50"></textarea>
</p>
<p>
	<input type="submit" name="submit" value="submit"/>
</p>
	
</form>

</body>
</html>