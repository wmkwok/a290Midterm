<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<?php include 'stylesheet.php';?>
</head>

<body>
<table width="612" height="247" class="table table-bordered">
  <thead>
    <tr>
      <th width="94" height="71">#</th>
      <th width="246">Name</th>
      <th width="266">Username</th>
      <th width="72">Options</th>
    </tr>
  </thead>
  <tbody>

 <?php
       require_once('connect.php');
       $conn = connection();
       mysqli_select_db($conn, "resource");
       $listAdmins="SELECT name, username FROM users";

       $listAdmins=mysqli_query($conn, $listAdmins);
       if(mysqli_num_rows($listAdmins)){
         $counter=1;
         $options="<td><img src=\"fonts/edit.ico\" width=\"20\" height=\"20\" /><img src=\"fonts/trash.ico\" width=\"25\" height=\"25\" /></td\
>";
         while($row=mysqli_fetch_assoc($listAdmins)){
            echo("<tr>");
            echo("<td>{$counter}</td>");
            echo("<td>{$row["name"]}</td>");
            echo("<td>{$row["username"]}</td>");
            echo($options);
            echo("</tr>");
            $counter+=1;
         }
    }
       mysqli_close($conn);
       ?>
  </tbody>
</table>

</body>
</html>
