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
<?php include "footer.php"?>
 
</body>

</html>