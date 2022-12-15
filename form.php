<?php 
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


$query= "INSERT INTO $table (tytul, data_wydania , autor, numer_isbn, wypozyczona) VALUES ('$tytul','$data_wydania','$autor','$numer_isbn','$wypozyczona')";



mysqli_query ($dbc, $query) 
or die ("Error querying database"); 

header("Location: index.php");
die(); 


mysqli_close($dbc); 
 
?>