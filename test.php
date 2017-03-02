<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resource</title>
    <?php include 'stylesheet.php';
          include 'state.php'; ?>
          <!--  -->

  </head>
  <body>
    <?php include 'header.php';
        ?>
        <script type="text/javascript"
         src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
         <script>

        jQuery(document).ready(function(){
            jQuery("#complex").hide();
            jQuery('#a').live('click', function(event) {
                 jQuery("#simple, #complex").toggle();
            });
        });
        </script>
    <div  class="jumbotron jumbotron-fluid">
      <div class="container">
	<h1 class="display-3">TSource</h1>
	<p class="lead">A open resource website for teachers and students.</p>
      </div>
    </div>
<div id = "complex" class="container">
    <p>sdfflksdfksdjfhksdjfh</p>
</div>
    <div id = "simple" class="container">
	 <form class="form-group" action="SearchResult.php" method="post" >
	     <label for="searchBar">General Search</label>
	     <input class="form-control" type="text" name="searchBar" value="" placeholder="ex. Python"/>
         <br>
          <div class="form-group">
	   <input class="btn btn-primary col-md-3" type="submit" name="submit" value="Search"/>

       <input class="btn btn-secondary col-md-2" type='button' id='a' value='Advanced Search'>
   </div>

	 </form>


</div>


<?php include "footer.php"?>
</body>

</html>
