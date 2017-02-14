<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact an Administrator</title>
    <?php include 'stylesheet.php';?>
  </head>

  <body>
    <?php include 'header.php';?>
    
     <div class="jumbotron jumbotron-fluid">
      <div class="container">
	<h1 class="display-3">Contact Us</h1>
	<p class="lead">Have a problem or suggestion? Tell us and we'll listen.</p>
      </div>
    </div>
    
    <div class="container">
      <form method="post">
	<br>
	<div class="form-group">
	  <label class="mr-sm-2">Please enter your email</label>
	  <input type="email" class="form-control" name="email" value="" maxlength="60"/></br>
	  
	  <label class="mr-sm-2">Please Specify Contact Reason</label>
	  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="reason">
    	<option disabled selected value>Select</option>
	    <option value="creation">Profile Creation</option>
	    <option value="upload">File Upload</option>
	    <option value="login">Login</option>
	    <option value="other">Other</option>
	  </select><br><br>

	  <label class="mr-sm-2">Please specify your concerns here</label>
	  <textarea class="form-control" name="textAreaField" id="textAreaField" rows="4" cols="50"></textarea>
	</div>
	
	<p>
	  <input class="btn btn-secondary" type="submit" name="submit" value="submit"/>
	</p>

      </form>
    </div>
    
    <?php include "footer.php"?>
  </body>
</html>
