<?php
// session_start();
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <?php include 'stylesheet.php';?>

    <script type="text/javascript">
		function userprofile(){
			var User = document.getElementById("i");
			User.src = "user_profile_overview.php";
		}
		function rescources(){
			var Res = document.getElementById("i");
			Res.src = "user_resources.php";
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
      <a class="item" onClick="rescources()" >Rescources Uploaded</a>
</div>
<?php
// include "user_profile_overview.php";
?>
<div class="embed-responsive embed-responsive-16by9">
<iframe id="i" src="user_profile_overview.php" width="60%" height="400" class="embed-responsive-item"></iframe>
</div>
<!-- <?php include "footer.php";?> -->
</body>
</html>
