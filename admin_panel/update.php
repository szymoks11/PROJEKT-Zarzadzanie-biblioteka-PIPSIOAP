<?php
session_start();
$id = $_SESSION["id"];
$user = "root";  
$password = "";  
$host = "localhost";  
$dbase = "biblioteka";  
$table = "ksiazki"; 

$tytul= $_POST['tytul'];
$data_wydania= $_POST['data_wydania'];
$autor= $_POST['autor'];
$numer_isbn= $_POST['numer_isbn'];
$wypozyczona= $_POST['wypozyczona'];


$dbc= mysqli_connect($host,$user,$password, $dbase)  

or die("Unable to select database"); 


$query="update ksiazki set tytul='".$tytul."',data_wydania='".$data_wydania."', autor='".$autor."', numer_isbn='".$numer_isbn."', wypozyczona='".$wypozyczona."' where id='".$id."'";



mysqli_query ($dbc, $query) 
or die ("Error querying database"); 

header("Location: adminpanel.php");
die(); 


mysqli_close($dbc); 
 
?>