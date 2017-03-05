
<!-- adds navigation bar to all pages -->
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <a class="navbar-brand" href="index.php">TSource</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <!-- this line helps user to high light which seesion tehyare on -->
            <?php
            if (session_status() == PHP_SESSION_ACTIVE) {
                echo "<li class='nav-item'><a class='nav-link' href='index.php'>Home<span class='sr-only'>(current)</span></a></li><li class='nav-item'><a class='nav-link' href='resourceupload.php'>Upload</a></li>";
            } else {
			
              if (isset($_SESSION['username'])) {
                    if ($_SESSION["active"] == 'yes') {
                        echo "<li class='nav-item'><a class='nav-link' href='index.php'>Home<span class='sr-only'>(current)</span></a></li><li class='nav-item active'><a class='nav-link' href='resourceupload.php'>Upload</a></li>";
                    } else {
                        echo "<li class='nav-item active'><a class='nav-link' href='index.php'>Home<span class='sr-only'>(current)</span></a></li><li class='nav-item'><a class='nav-link' href='resourceupload.php'>Upload</a></li>";
            // }
                    }
                } else {
                    echo "<li class='nav-item active'><a class='nav-link' href='index.php'>Home<span class='sr-only'>(current)</span></li>";
			  }
                }
            
			
			

             ?>

        </ul>
       <?php
        session_start();
        if (!isset($_SESSION['username'])) {
            ?>
		<html>
        <form class="form-inline my-2 my-md-0" >
           <a href="login.php" class="btn btn-outline-success my-2 my-sm-0" role="button" aria-pressed="true">Login</a>
		   <a href="createprofile.php" class="btn btn-outline-success my-2 my-sm-0" role="button" aria-pressed="true">Sign Up</a>
		 </form>

       <?php

        } else {
            ?>
        <form class="form-inline my-2 my-md-0" method="post">
           <a href="userprofile.php" class="btn btn-outline-success my-2 my-sm-0" role="button" aria-pressed="true">
           <?php
            echo $_SESSION['username']; ?>
			</a>

           <button class="btn btn-outline-success my-2 my-sm-0" name = "logout" type= "submit" role="button" aria-pressed="true">Log Out
           <?php

        //    if user tyring to logout
            if (isset($_POST['logout'])) {
                unset($_SESSION['username']);
                header('Location: login.php');
            } ?>
			</button>
        </form>
        <?php

        }
        ?>
		</html>
    </div>
</nav>
