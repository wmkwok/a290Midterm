<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Upload A Resource</title>
<?php include 'stylesheet.php';?>
  </head>

  <body>
 <?php include 'header.php';?>

   <div class="jumbotron jumbotron-fluid">
      <div class="container">
	<h1 class="display-3">Resource Upload</h1>
	<p class="lead">upload your files to the website</p>
      </div>
    </div>

    <div class="container">
	 <form class="form-group" method="post" enctype="multipart/form-data">

	   <p>Please choose a file to upload, then click upload.</p>

	   <label class="mr-sm-2">Grade Level</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" required name="gradeLevel" size="1">
	     <option value="select">Select</option>
	     <option value="pre">Pre-school</option>
	     <option value="elementary">Elementary School</option>
	     <option value="middle">Middle School</option>
	     <option value="high">High School</option>
	   </select></br>

	   <label class="mr-sm-2">Standard</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" required name="standard" size="1">
	     <option value="select">Select</option>
	     <option value="csta">CSTA 2016 Standards (interim)</option>
	     <option value="iste">ISTE-Standards for Computer Science Educators</option>
	     <option value="ap">AP CS Principles</option>
	   </select></br>




	   <label class="mr-sm-2">Resource Type</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" required name="resourceType" size="1">
	     <option value="select">Select</option>
	     <option value="assessment">Assessment</option>
	     <option value="activity">Activity/Exercise</option>
	     <option value="lesson">Lesson Plan</option>
	     <option value="project">Project</option>
	   </select></br>

	   <label class="mr-sm-2">Subject</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" required name="subject" size="1">
	     <option value="select">Select</option>
	     <option value="math">Mathematics</option>
	     <option value="science">Science</option>
	     <option value="languageArts">Language Arts</option>
	     <option value="languages">Foreign Languages</option>
	     <option value="civics">Civics and Government</option>
	     <option value="economics">Economics</option>
	     <option value="Arts">Arts</option>
	     <option value="history">History and Geography</option>
	   </select></br>

	   <label class="mr-sm-2">Concept</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" required name="concept" size="1">
	     <option value="select">Select</option>
	     <option value="algorithms">Algorithms and Programs</option>
	     <option value="computing">Computing Systems</option>
	     <option value="data">Data and Analysis</option>
	     <option value="impacts">Impacts of Computing</option>
	     <option value="networks">Networks and the Internet</option>
	   </select></br>



	   <label class="mr-sm-2">Programming language</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" required name="programLanguage" size="1">
	     <option value="select">Select</option>
	     <option value="scratch">Scratch</option>
	     <option value="blockly">Blockly</option>
	     <option value="python">Python</option>
	     <option value="csUnplugged">CS Unplugged</option>
	     <option value="php">PHP</option>
	     <option value="java">Java</option>
	     <option value="cpp">C++</option>
	     <option value="visualBasic">Visual Basic</option>
	     <option value="ruby">Ruby</option>
	     <option value="javascript">Javascript</option>
	     <option value="scheme">Scheme</option>
	     <option value="nonProgramming">Not Programming Related</option>
	   </select></br>

	   <label class="mr-sm-2">State</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="state" size="1">
	     <option value="select">Select</option>
	     <option value="all">All</option>
	     <option value="indiana">Indiana</option>
	     <option value="illinois">Illinois</option>
	     <option value="ohio">Ohio</option>
	   </select><br>

	   <label class="mr-sm-2">Instructional method</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" required name="instructionalMethod" size="1">
	     <option value="select">Select</option>
	     <option value="problemBased">Problem-based Learning</option>
	     <option value="projectBased">Project-Based Learning</option>
	     <option value="media">Media Computation</option>
	     <option value="pair">Pair Programming</option>
	     <option value="peer">Peer Instruction</option>
	     <option value="lecture">Lecture</option>
	     <option value="caseBased">Case-based Learning</option>
	     <option value="rolePlay">Role PLay</option>
	     <option value="assessment">Assessment</option>
	   </select></br>


	   <br/>

	   <label class="btn btn-success">
    	Choose File <input type="file" name="userfile" hidden/>
		</label><br>
           
    <button class="btn btn-secondary" type="submit" name="upload" value="upload"> Upload </button>
	 </form> 
</div>


<?php 

       if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{		
		$error = $_FILES['userfile']['error'];
		$fileName = $_FILES['userfile']['name'];
		echo $fileName;
		echo '<br/>';
		
		$tmpName  = $_FILES['userfile']['tmp_name'];
		$fileSize = $_FILES['userfile']['size'];
		$fileType = $_FILES['userfile']['type'];
	
		
		echo $fileSize;
		echo '<br/>';
		echo $fileType;
		echo '<br/>';
		$gradeLevel = $_POST['gradeLevel'];
		$standard = $_POST['standard'];
		$resourceType = $_POST['resourceType'];
		$subject = $_POST['subject'];
		$concept = $_POST['concept'];
		$programLanguage = $_POST['programLanguage'];
		$state = $_POST['state'];
		$instructionalMethod = $_POST['instructionalMethod'];
		$user = $_SESSION['username'];
		$link = '----';
		$date = date("j, n, Y");  
	
		

		$fp = fopen($tmpName, 'r');
		$content = fread($fp, $fileSize);
		$content = addslashes($content);
		fclose($fp);
		
		if(!get_magic_quotes_gpc())
		{
			$fileName = addslashes($fileName);
		}
		echo("Success upload");
		include('connect.php');
		$conn = connection();
		mysqli_select_db($conn, "files");

		$addFiles = "INSERT INTO `files`(`filename`, `uploadedBy`, `date`, `rating`, `description`, `state`, `gradeLevel`, `link`, `subject`) VALUES ('$fileName','$user','$date', 5, 'good','$state','$gradeLevel','$link','$subject')";
		
		mysqli_query($conn, $addFiles) or die(mysqli_error($conn));
		mysqli_close($conn);
	
		echo "<div class=\"alert alert-success\"><strong> '$fileName' Uploaded'</strong></div>";			   
}		


?> 
<br/>
<?php include 'footer.php';?>
</body>
</html>
