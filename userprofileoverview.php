<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset='UTF-8'>
<title>Overview</title>
	<?php include 'stylesheet.php';
          include 'connect.php';
          include 'state.php';?>

</head>
<body>
<div width='554' height='448' class='container'>
<!-- <table width='554' height='448' class='table table-bordered'> -->
<?php
		//create connection
    $conn = connection();
    $oldusername = $_SESSION['username'];

		//change things
    $sql = "SELECT * FROM users WHERE username = '$oldusername'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    $name = $row['name'];
    $email = $row['email'];
    $st = $row['schooltype'];
    $sl = $row['schoollevel'];
    $oldstate = $row['state'];



    // this is what happen when user tyring to change their personal info
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //get all posted variables
        $oldusername = sanitize($_POST["oldusername"]);
        $username = sanitize($_POST["username"]);
        $name = sanitize(($_POST["name"]));
        $email = $_POST["email"];
        $type = sanitize($_POST["schoolType"]);
        $level = sanitize($_POST["schoolLevel"]);
        $state = sanitize($_POST["state"]);

         //connect to mysql
        $sql = "SELECT * FROM users WHERE username = '$username'";

        $userFind = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            //  	   if no user have that name or user have did not change the username
        if (mysqli_num_rows($userFind) == 0 or $username == $oldusername) {
            //do the insert magic here and give the user a chocolate chip cookie
            $updateuser= "UPDATE `users` SET `username`='$username',`name`='$name',`email`='$email',`schooltype`='$type',`schoollevel`='$level',`state`='$state' WHERE `username` = '$oldusername'";
            mysqli_query($conn, $updateuser) or die(mysqli_error($conn));
            mysqli_close($conn);
            $_SESSION['username'] = $username;
            $_SESSION['update']   = "a";
            session_write_close();
            echo "<script type='text/javascript'>window.location.href='userprofileoverview.php'</script>";
            exit;
        } else {
            echo "<div class=\"alert alert-warning\"><strong>Username already in use.</strong></div>";
        }
    }

      function sanitize($data)
      {
          $data = trim($data); //Strip whitespace (or other characters) from the beginning and end of a string
        $data = stripslashes($data); //Un-quotes a quoted string
        $data = htmlspecialchars($data); //
        if (isset($data)) {
            return $data;
        }
      }
    echo
  "<form method = 'post' action = 'userprofileoverview.php'>
    <input type='hidden' name= 'oldusername' value='$oldusername'>
    <input type='hidden' name= 'username' value='$username'>
    <div class=form-group 'row'>
    <fieldset disabled>
      <label for='inputEmail3' class='col-sm-2 col-form-label'>Username</label>
      <div class='col-sm-10'>
        <input class='form-control' value = '$username'>
      </div>
       </fieldset>
    </div>

    <div class=form-group 'row'>
      <label for='inputEmail3' class='col-sm-2 col-form-label'>Name</label>
      <div class='col-sm-10'>
        <input class='form-control'  name = 'name' value = '$name'>
      </div>
    </div>

    <div class=form-group 'row'>
      <label for='inputEmail3' class='col-sm-2 col-form-label'>Email</label>
      <div class='col-sm-10'>
        <input class='form-control' name = 'email' value = '$email'>
      </div>
    </div>
    <!--  -->
    <div class='form-group'>";
    // this is a much easier way to select the dropdown, the detial fcuntion is in the state.php
    echo "<label class='mr-sm-3'>School Type</label><select class = 'custom-select mb-2 mr-sm-2 mb-sm-0' required name='schoolType'>";

    echo schoolTypes($st);
      echo "</select>";

      echo "<label class='mr-sm-2'>School Level</label><select class = 'custom-select mb-2 mr-sm-2 mb-sm-0' required name='schoolLevel'>";
      echo schoolLevels($sl);
    echo "</select>";

      echo "<label class='mr-sm-2'>State</label><select class = 'custom-select mb-2 mr-sm-2 mb-sm-0' required name='state'>";
      echo StateDropdown($oldstate, 'name');
    echo "</select>
  </div>

  <div class='form-group row'>
      <div class='offset-sm-0 col-sm-10'>
        <button type='submit' class='btn btn-primary'>Upload information</button>
      </div>
    </div>
  </form>";

  ?>
</div>



</div>

</body>
</html>
