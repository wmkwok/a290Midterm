<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <?php include 'stylesheet.php';?>

    <!-- look at uploaded resources or profile information to change -->
    <script type="text/javascript">
		function userprofile(){
			var User = document.getElementById("i");
			User.src = "userprofileoverview.php";
		}
		function resources(){
			var Res = document.getElementById("i");
			Res.src = "userresources.php";
        }
	  </script>
    <link rel="stylesheet" type="text/css" class="ui" href="css/semantic.min.css">
  </head>

  <body>

      <?php include 'header.php';?>

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
  	<h1 class="display-5">Admin</h1>
        </div>
      </div>
  <div class="ui two item stackable tabs menu">
      <a class="item" onClick="userprofile()" >Overview</a>
      <a class="item" onClick="resources()" >Rescources Uploaded</a>
</div>
<?php
// include "user_profile_overview.php";
?>
<div class="embed-responsive embed-responsive-16by9">
<iframe id="i" src="userprofileoverview.php" width="60%" height="400" class="embed-responsive-item"></iframe>
</div>
<?php include "footer.php";?>
</body>
</html>
