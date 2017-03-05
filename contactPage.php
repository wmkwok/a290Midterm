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
	  <input type="email" class="form-control" required name="email" value="" maxlength="60"/></br>

	  <label class="mr-sm-2">Please Specify Contact Reason</label>
	  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" required name="reason">
    	<option disabled selected value>Select</option>
	    <option value="creation">Profile Creation</option>
	    <option value="upload">File Upload</option>
	    <option value="login">Login</option>
	    <option value="other">Other</option>
	  </select><br><br>

	  <label class="mr-sm-2">Please specify your concerns here</label>
	  <textarea class="form-control" required name="textAreaField" id="textAreaField" rows="4" cols="50"></textarea>
	</div>

	<p>
	  <input class="btn btn-secondary" type="submit" name="submit" value="submit"/>
	</p>

      </form>
    </div>

    <?php
if(isset($_POST['submit'])){
    //send email for contacting
    $to = "qinglong@indiana.edu"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address

    $subject = "Form submission: " . $_POST['reason']. " problem";
    $subject2 = "Copy of your form submission";
    $message = $_POST['textAreaField'];
    $message2 = "Here is a copy of your message \n\n" . $_POST['textAreaField'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	echo '<div style="position:absolute;top:730px;left:90px">';
    echo "Mail Sent. Thank you, we will contact you shortly.";
	echo '</div>';

}
?>
<br/>
<br/>
    <?php include "footer.php"?>
  </body>
</html>
