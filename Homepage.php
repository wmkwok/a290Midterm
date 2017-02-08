<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Resource</title>
<?php include 'stylesheet.php';?>
</head>

<body>
<?php include 'header.php';?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">TSource</h1>
    <p class="lead">A open resource website for teachers and students.</p>
  </div>
</div>

<div class="container"
<form class="form-inline" method="post">
	<label class="mr-sm-2">Grade Level</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="gradeLevel" size="1">
		   <option value="select">Select</option>
		   <option value="pre">Pre-school</option>
		   <option value="elementary">Elementary School</option>
		   <option value="middle">Middle School</option>
		   <option value="high">High School</option>
	</select></br>

	<label class="mr-sm-2">Standard</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="standard" size="1">
		   <option value="select">Select</option>
		   <option value="csta">CSTA 2016 Standards (interim)</option>
		   <option value="iste">ISTE-Standards for Computer Science Educators</option>
		   <option value="ap">AP CS Principles</option>
	</select></br>

	<label class="mr-sm-2">Grade Level for these standards</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="standardGradeLevel" size="1">
		   <option value="select">Select</option>
		   <option value="pre">Pre-school</option>
		   <option value="elementary">Elementary School</option>
		   <option value="middle">Middle School</option>
		   <option value="high">High School</option>
		   <option value="college">College</option>
	</select></br>

	<label class="mr-sm-2">Framework Concept</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="concept" size="1">
		   <option value="select">Select</option>
		   <option value="algorithms">Algorithms and Programs</option>
		   <option value="computing">Computing Systems</option>
		   <option value="data">Data and Analysis</option>
		   <option value="impacts">Impacts of Computing</option>
		   <option value="networks">Networks and the Internet</option>
	</select></br>

   	<label class="mr-sm-2">Resource Type</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="resourceType" size="1">
		   <option value="select">Select</option>
		   <option value="assessment">Assessment</option>
		   <option value="activity">Activity/Exercise</option>
		   <option value="lesson">Lesson Plan</option>
		   <option value="project">Project</option>
	</select></br>
	
	<label class="mr-sm-2">Select a subject that involves or related to this resource</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="subject" size="1">
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
	
	<label class="mr-sm-2">Instructional method of this resource</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="instructionalMethod" size="1">
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
	
   	<label class="mr-sm-2">Programming language used in the resource</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="programLanguage" size="1">
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
	
   	<label class="mr-sm-2">Select the state of resource</label>
	   <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="state" size="1">
		   <option value="select">Select</option>
		   <option value="all">All</option>
		   <option value="indiana">Indiana</option>
		   <option value="illinois">Illinois</option>
		   <option value="ohio">Ohio</option>
	</select></br>
	
	<p>
		<label for="searchBar">Keyword Search</label>
		<input class="form-control" type="text" name="searchBar" value=""/>
	<p><input class="btn btn-secondary" type="submit" name="submit" value="Search"/></p>
	</p>

</form>
</div>
<?php include "footer.php"?>
</body>
</html>
