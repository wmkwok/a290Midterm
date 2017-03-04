<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<?php include 'stylesheet.php';?>
</head>

<body>
  <form method="post">
<input class="form-control" type="text" name="search" maxsize="50" value="" placeholder="Name Here">
<button type="submit" class="btn btn-secondary">Search</button>
</form>

<div class="container">
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
    //set the search to either something or emtpy
      if(isset($_POST['search'])){
        $search=$_POST['search'];
      }
      else{
        $search="";
      }
        //connect to database
        require_once('connect.php');
        $conn = connection();
        $sql="SELECT * FROM users WHERE username LIKE '$search%'";
        $sql=mysqli_query($conn, $sql);
        if(mysqli_num_rows($sql) > 0){
          $counter=1;
          $options="<td><img src=\"fonts/edit.ico\" width=\"20\" height=\"20\" /><img src=\"fonts/trash.ico\" width=\"25\" height=\"25\" /></td\
 >";
          //if there are results, populate into a table
          while($row=mysqli_fetch_assoc($sql)){
             echo("<tr>");
             echo("<td>{$counter}</td>");
             echo("<td>{$row["name"]}</td>");
             echo("<td>{$row["username"]}</td>");
             echo($options);
             echo("</tr>");
             $counter+=1;
          }
     }
      //close the connection to database
        mysqli_close($conn);
    ?>
    </tbody
  </table>
</div>


</body>
</html>
