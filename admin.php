<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>

    <!-- Include stylesheet and define file references -->
    <?php include 'stylesheet.php';?>
    <script type="text/javascript">
		function User(){
			var User = document.getElementById("i");
			User.src = "user.php";
		}
		function Res(){
			var Res = document.getElementById("i");
			Res.src = "resource.php";
		}
		function Search(){
			var Search = document.getElementById("i");
			Search.src = "search.php";
		}
		function Administrator(){
			var ad = document.getElementById("i");
			ad.src = "administrator.php";
		}
	  </script>

  </head>

  <body>

  <?php include 'header.php';?>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
	<h1 class="display-5">Admin</h1>
      </div>
    </div>


    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Pages
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" onClick="User()" >Users</a>
    <a class="dropdown-item" onClick="Res()" >Resources</a>
    <a class="dropdown-item" onClick="Search()" >Search</a>
    <a class="dropdown-item" onClick="Administrator()" >Administrators</a>

  </div>
</div>

	  <div class="embed-responsive embed-responsive-16by9">

	<iframe id="i" src="search.php" width="60%" height="400" class="embed-responsive-item"></iframe>
	  </div>


 <br/>
 <br/>

<?php include "footer.php"?>
</body>
</html>
