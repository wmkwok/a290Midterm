<?php

if (isset($_GET['dname'])) {
    $dname =  $_GET['dname'];
	
	include('connect.php');
	$conn = connection();
	mysqli_select_db($conn, "resource");
	$sql="DELETE FROM users WHERE username = '$dname'";
	//echo "connect success";
//	$result = mysqli_query($conn, $sql);
	if ($conn->query($sql) === TRUE) {
    	echo "Record delete successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
}

	$conn->close();
	
	header("Location:user.php");
      exit();
}


if (isset($_GET['dfile'])) {
    $dfile =  $_GET['dfile'];
	
	include('connect.php');
	$conn = connection();
	mysqli_select_db($conn, "resource");
	$sql="DELETE FROM files WHERE filename = '$dfile'";
	//echo "connect success";
//	$result = mysqli_query($conn, $sql);
	if ($conn->query($sql) === TRUE) {
    	echo "Record delete successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
}

	$conn->close();
	
	header("Location:resource.php");
      exit();
}


