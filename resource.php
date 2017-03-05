<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Resource</title>
<?php include 'stylesheet.php';?>
</head>

<body>
<div class="container">
<table width="554" height="448" class="table table-bordered">
  <thead>
    <tr>
      <th width="69">#</th>
      <th width="122">Resource Title</th>
      <th width="149">Grade Level</th>
      <th width="168">Rating</th>
      <th width="66" style="width: 3.5em;"></th>
    </tr>
  </thead>
  <tbody>

 <?php
    //connect to database
       require_once('connect.php');
       $conn = connection();
       mysqli_select_db($conn, "resource");
       $listSources="SELECT filename, gradeLevel, rating FROM files";
       $listSources=mysqli_query($conn, $listSources);
       if(mysqli_num_rows($listSources)){
         $counter=1;
         $options="<td><img src=\"fonts/edit.ico\" width=\"20\" height=\"20\" /><img src=\"fonts/trash.ico\" width=\"25\" height=\"25\" /></td>";
         //if there are results then display as table
         while($row=mysqli_fetch_assoc($listSources)){
            echo("<tr>");
            echo("<td>{$counter}</td>");
            echo("<td>{$row["filename"]}</td>");
            echo("<td>{$row["gradeLevel"]}</td>");
            echo("<td>{$row["rating"]}</td>");
            echo($options);
            echo("</tr>");
            $counter+=1;
         }
    }
        //close connection to database
       mysqli_close($conn);
       ?>
  </tbody>
</table>
	</div>

</body>
</html>
