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

              $gradeLevel = $_POST["gradeLevel"];
              $standard = $_POST["standard"];
              $standardGradeLevel = $_POST["standardGradeLevel"];
              $concept = $_POST["concept"];
              $resourceType = $_POST["resourceType"];
              $subject = $_POST["subject"];
              $instructionalMethod = $_POST["instructionalMethod"];
              $programLanguage = $_POST["programLanguage"];
              $state = $_POST["state"];
              $searchBar = $_POST["searchBar"];
              $conn = connection();

              $sql = "SELECT * FROM files WHERE gradeLevel = '$standardGradeLevel' AND subject = '$subject'";

              $header = "<thead><tr><th>#</th><th>Name</th><th>Author</th><th>Rating</th></tr></thead><tbody>";
              $content = "";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                  $index = 1;
                  echo "Ifound something";
                  // add up all the content in the databse
                  while ($row = mysqli_fetch_assoc($result)) {
                      $n = $row["filename"];
                      $a = $row["uploadedBy"];
                      $r = $row["rating"];
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
          }
           ?>
    </div>

<div id="footer"><?php include "footer.php"?></div>  </body>
</html>
