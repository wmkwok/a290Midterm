
<?php

if (isset($_GET['fname'])) {
    if (!isset($_SESSION["username"])) {
        // check if user logiined or not, only user cna download
        header('Location: login.php');
    }
    echo $_GET['fname'];


    $dir = "files/";
    $file = $dir .$_GET['fname'];
    //if file exist then start the data for download
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit;
    }
}
