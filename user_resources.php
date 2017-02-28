<?php // test.php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	<?php include 'stylesheet.php';?>
</head>
<body>
<div class = 'container'>
<table class="table table-bordered">
<div class="container">
    <?php
    include "connect.php";
    $conn = connection();
    $name = $_SESSION["username"];
    $sql = "SELECT * FROM files WHERE uploadedBy = '$name'";

    $header = "<thead><tr><th>#</th><th>Name</th><th>Date</th><th>description</th></tr></thead><tbody>";
    $content = "";
    $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $index = 1;
            // add up all the content in the databse
            while ($row = mysqli_fetch_assoc($result)) {
                $n = $row["filename"];
                $a = $row["date"];
                $r = $row["description"];
                $content.= "<tr><th scope='row'>$index</th><td>$n</td><td>$a</td><td>$r</td></tr>";
                $index+=1;
            }
        } else {
            echo "nothing found";
        }
        // show the content to the user
        $header.=$content;
        $header.="</tbody></table>";
        echo $header;
        // then we are oging to check teh database
     ?>
</div>
</div>
</body>
</html>
