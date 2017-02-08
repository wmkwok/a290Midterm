<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Resource</title>
<?php include 'stylesheet.php';?>
</head>

<body>
<?php include 'header.php';?>
<form method="post">
	<p>
	<label>Grade Level</label>
	   <select name="gradeLevel" size="1">
		   <option value="select">Select</option>
		   <option value="pre">Pre-school</option>
		   <option value="elementary">Elementary School</option>
		   <option value="middle">Middle School</option>
		   <option value="high">High School</option>
	</select>
	</p>

	<p>
	<label>Standard</label>
	   <select name="standard" size="1">
		   <option value="select">Select</option>
		   <option value="csta">CSTA 2016 Standards (interim)</option>
		   <option value="iste">ISTE-Standards for Computer Science Educators</option>
		   <option value="ap">AP CS Principles</option>
	</select>
	</p>

	<p>
	<label>Grade Level for these standards</label>
	   <select name="standardGradeLevel" size="1">
		   <option value="select">Select</option>
		   <option value="pre">Pre-school</option>
		   <option value="elementary">Elementary School</option>
		   <option value="middle">Middle School</option>
		   <option value="high">High School</option>
		   <option value="college">College</option>
	</select>
	</p>

	<p>
	<label>Framework Concept</label>
	   <select name="concept" size="1">
		   <option value="select">Select</option>
		   <option value="algorithms">Algorithms and Programs</option>
		   <option value="computing">Computing Systems</option>
		   <option value="data">Data and Analysis</option>
		   <option value="impacts">Impacts of Computing</option>
		   <option value="networks">Networks and the Internet</option>
	</select>
	</p>

	<p>
	<label>Resource Type</label>
	   <select name="resourceType" size="1">
		   <option value="select">Select</option>
		   <option value="assessment">Assessment</option>
		   <option value="activity">Activity/Exercise</option>
		   <option value="lesson">Lesson Plan</option>
		   <option value="project">Project</option>
	</select>
	</p>

	<p>
	<label>Select a subject that involves or related to this resource</label>
	   <select name="subject" size="1">
		   <option value="select">Select</option>
		   <option value="math">Mathematics</option>
		   <option value="science">Science</option>
		   <option value="languageArts">Language Arts</option>
		   <option value="languages">Foreign Languages</option>
		   <option value="civics">Civics and Government</option>
		   <option value="economics">Economics</option>
		   <option value="Arts">Arts</option>
		   <option value="history">History and Geography</option>
	</select>
	</p>

	<p>
	<label>Select an instructional method that can be used for this resource</label>
	   <select name="instructionalMethod" size="1">
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
	</select>
	</p>

	<p>
	<label>Select a programming language used in the resource</label>
	   <select name="programLanguage" size="1">
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
	</select>
	</p>

	<p>
	<label>Select the state you want to search the resource</label>
	   <select name="state" size="1">
		   <option value="select">Select</option>
		   <option value="all">All</option>
		   <option value="indiana">Indiana</option>
		   <option value="illinois">Illinois</option>
		   <option value="ohio">Ohio</option>
	</select>
	</p>

	<p>
		<label for="searchBar">Keyword Search</label>
		<input type="text" name="searchBar" value=""/>
	<p><input type="submit" name="submit" value="Search"/></p>
	</p>

</form>

<?php include "footer.php"?>
</body>
</html>
