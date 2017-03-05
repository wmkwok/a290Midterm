
<!-- links to contact and copyright information -->
       <footer class="footer">

          <div class="bg-faded">
          <ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="contactpage.php">Contact Us</a>
  </li>
  <li class="nav-item">
<a class="nav-link" href="copyright.php">Copyright</a>
</li>
  <?php
  if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }
  // echo $_SESSION['admin'];
     if (isset($_SESSION['admin']) && $_SESSION['admin'] == "1") {
         echo "<li class='nav-item'><a class='nav-link' href='Admin.php'>Admin</a></li>";
     }


    ?>
</ul>

		   </div>
        </footer>
