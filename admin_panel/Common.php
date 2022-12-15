<?php
$hostName = "localhost"; // host name
$username = "root";  // database username
$password = ""; // database password
$databaseName = "biblioteka"; // database name

$connection = new mysqli($hostName,$username,$password,$databaseName);
if (!$connection) {
    die("Error in database connection". $connection->connect_error);
}
class Common
{
    public function getAllRecords($connection) {
        $query = "SELECT * FROM ksiazki";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }

    public function deleteRecordById($connection,$recordId) {
        $query = "DELETE FROM ksiazki WHERE id='$recordId'";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
    public function updateRecordById($connection,$recordId,) {
        $query = "SELECT * FROM ksiazki";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
    public function getRecordById($connection, $recordId) {
        $query = "SELECT * FROM ksiazki WHERE id='$recordId'";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
}