
<?php

if (isset($_GET['fname'])) {
    // if id is set then get the file with the id from database

    // include 'library/config.php';
    // include 'library/opendb.php';
    include 'connect.php';
    $fname = $_GET['fname'];
    echo $fname;
    $conn = connection();
    $sql = "SELECT * FROM files WHERE filename = '$fname'";
    $result = mysqli_query($conn, $sql);


    list($name, $type, $size, $content) =  mysqli_fetch_array($result);

    header("Content-length: $size");
    header("Content-type: $type");
    header("Content-Disposition: attachment; filename=$name");
    echo $content;
    include 'library/closedb.php';
    exit;
}
