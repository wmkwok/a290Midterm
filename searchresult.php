<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'stylesheet.php';?>
  </head>

  <body>
    <?php include 'header.php';?>
    <div class="container">
      <table class="table table-bordered">
          <?php
          include "connect.php";

          if (isset($_POST["submit"])) {
              // getting the content from the form
              $type = $_POST["searchc"];
              $searchBar = $_POST["searchBar"];
              $conn = connection();

              //if more search options, get the inputs
              if ($type == "complex") {
                  $gradeLevel = $_POST["gradeLevel"];
                  $standard = $_POST["standard"];
                  $standardGradeLevel = $_POST["standardGradeLevel"];
                  $concept = $_POST["concept"];
                  $resourceType = $_POST["resourceType"];
                  $subject = $_POST["subject"];
                  $instructionalMethod = $_POST["instructionalMethod"];
                  $programLanguage = $_POST["programLanguage"];
                  $state = $_POST["state"];
                  $sql = "SELECT * FROM files WHERE gradeLevel = '$standardGradeLevel' AND subject = '$subject'";
              } else {
                  //normal search
                  $sql = "SELECT * FROM files WHERE filename LIKE '%$searchBar%'";
              }
              $header = "<thead><tr><th>#</th><th>Name</th><th>Author</th><th>Rating</th> <th>Download</th></tr></thead><tbody>";
              $content = "";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                  $index = 1;
                // add up all the content in the databse
                while ($row = mysqli_fetch_assoc($result)) {
                    $n = $row["filename"];
                    $a = $row["uploadedBy"];
                    $r = $row["rating"];
                    // if will go to download.php to run thr query and then download
                    $content.= "<tr><th scope='row'>$index</th><td>$n</td><td>$a</td><td>$r</td><td><a href='download.php?fname=$n'>download</a></td></tr>";
                    $index+=1;
                }
              } else {
                  // this need to change
                echo "<h5 class='bg-warning'>  nothing found</h3>";
              }
              // show the content to the user
              $header.=$content;
              $header.="</tbody></table>";
              echo $header;
              // then we are oging to check teh database
          }
           ?>

    </div>

<div id="footer"><?php include "footer.php"?></div>  </body>
</html>
