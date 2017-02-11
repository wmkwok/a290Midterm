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
    <style>
	.sidebar-nav{float: left; width:200px} 
	  </style>
  </head>

  <body>
   
  <?php include 'header.php';?>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
	<h1 class="display-5">Admin</h1>
      </div>
    </div>
    
    
    
  <div class="sidebar-nav">
    
    <ul>
    
    <li>
    <button type="button" class="btn btn-default" style="height:30px;width:150px" onclick = "Home()">Main</button></li>
	 
	<li><button type="button" class="btn btn-default" style="height:30px;width:150px" onclick = "User()">User</button></li>
  	
  	<li><button type="button" class="btn btn-default" style="height:30px;width:150px" onClick="Res()">Resource</button></li>
  	<li><button type="button" class="btn btn-default" style="height:30px;width:150px" onClick="Search()">Search</button></li>
  	<li><button type="button" class="btn btn-default" style="height:30px;width:150px" onClick="Administrator()">Administrator</button></li>
  	
  	</ul>
	  </div>
	<iframe id="i" src = "AdminHome.php" width="60%" height="400" style="position:relative; left: 100px; right: 100px"></iframe>
</div>

 <br/>
 <br/>
<?php include "footer.php"?>
</body>
</html>