<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <?php include 'stylesheet.php';?>
    
    <script type="text/javascript"> 
		function User(){ 
			var User = document.getElementById("i"); 
			User.src = "User.php"; 
		} 
		function Home(){ 
			var Home = document.getElementById("i"); 
			Home.src = "AdminHome.php"; 
		} 
		function Res(){ 
			var Res = document.getElementById("i"); 
			Res.src = "Resource.php"; 
		} 
		function Search(){ 
			var Search = document.getElementById("i"); 
			Search.src = "Search.php"; 
		} 
		function Administrator(){ 
			var ad = document.getElementById("i"); 
			ad.src = "Administrator.php"; 
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
    <a class="dropdown-item" onClick="Home()" >Main</a>
    <a class="dropdown-item" onClick="User()" >Users</a>
    <a class="dropdown-item" onClick="Res()" >Resources</a>
    <a class="dropdown-item" onClick="Search()" >Search</a>
    <a class="dropdown-item" onClick="Administrator()" >Administrators</a>
    
  </div>
</div>
  
	  <div class="embed-responsive embed-responsive-16by9">
	  
	<iframe id="i" src="AdminHome.php" width="60%" height="400" class="embed-responsive-item"></iframe>
	  </div>
</div>

 <br/>
 <br/>
<?php include "footer.php"?>
</body>
</html>