<?php
$hostName = "localhost"; // host name
$username = "root";  // database username
$password = ""; // database password
$databaseName = "biblioteka"; // database name

$connection = new mysqli($hostName,$username,$password,$databaseName);
if (!$connection) {
    die("Error in database connection". $connection->connect_error);
}

include_once "Common.php";



if (isset($_GET['id'])){
    $recordId = $_GET['id'];
    $common = new Common();
    $update = $common->getRecordById($connection,$recordId);
    if ($update){
        echo '<script>window.location.href="edit_page.php?id="'.$recordId.'";</script>';
    }
}
?>
