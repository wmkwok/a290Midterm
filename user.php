<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	<?php include 'stylesheet.php';?>
</head>
<body>
<div class="container">
<table width="554" height="448" class="table table-bordered">
  <thead>
    <tr>
      <th width="69">#</th>
      <th width="122">Name</th>
      <th width="168">Username</th>
      <th width="66" style="width: 3.5em;">Options</th>
    </tr>
  </thead>
  <tbody>

    <?php
			//connect to database
       require_once('connect.php');
       $conn = connection();
       mysqli_select_db($conn, "resource");
       $listUsers="SELECT name, username FROM users";
       $listUsers=mysqli_query($conn, $listUsers);
	  
       if(mysqli_num_rows($listUsers)){
         $counter=1;
         
				 //list all the users as rows of a table
         while($row=mysqli_fetch_assoc($listUsers)){
			 $deletename = $row["username"];
			 $options="<td><a href='delete.php?dname=$deletename'><img src=\"fonts/trash.ico\" width=\"25\" height=\"25\" /></a> </td>";
            echo("<tr>");
            echo("<td>{$counter}</td>");
            echo("<td>{$row["name"]}</td>");
            echo("<td>{$row["username"]}</td>");
            echo($options);
            echo("</tr>");
            $counter+=1;
         }
    }
			//close connection
       mysqli_close($conn);
       ?>

  </tbody>
</table>
</div>

</body>
</html>
