<?php
function connection()
{
    $conn = mysqli_connect("localhost", 'root', "a290php") or die(mysqli_error($conn));
    mysqli_select_db($conn, 'resource') or die(mysqli_error($conn));
    return $conn;
}
