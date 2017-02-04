<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Profile</title>
</head>
<body>
<form method="post">
<p>
	<label>Name</label>
	<input type="text" name="name" value=""/><br />
</p>

<p>
	<label>School Type</label>
	<select name="schoolType">
		<option value="select">Select</option>
		<option value="public">Public</option>
		<option value="private">Private</option>
		<option value="charter">Charter</option>
		<option value="techCenter">Technology Center</option>
		<option value="other">Other</option>
	</select>
</p>

<p>
	<label>School Level</label>
	<select name="schoolLevel">
		<option value="select">Select</option>
		<option value="preschool">Pre-school</option>
		<option value="elementary">Elementary School</option>
		<option value="middle">Middle School</option>
		<option value="high">High School</option>
	</select>
</p>

<p>
	<label>State</label>
	<select name="state">
		<option value="select">Select</option>
		<option value="indiana">Indiana</option>
		<option value="illinois">Illinois</option>
		<option value="ohio">Ohio</option>
		<option value="other">Other</option>
	</select>
</p>

<p>
	<label>Username</label>
	<input type="text" name="userName" value=""/><br /><br />
	<label>Email Address</label>
	<input type="email" name="email" value=""/><br /><br />
	<label>Password (8-16 characters, numbers and letters only)</label>
	<input type="password" name="password" value=""/><br /><br />
</p>

<p>
	<input type="submit" name="submit" value="Submit"/>
</p>
</form>

</body>
</html>