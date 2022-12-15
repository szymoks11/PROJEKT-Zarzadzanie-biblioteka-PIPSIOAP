<?php
  $con = mysqli_connect("localhost","root","","biblioteka");
  
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  
  $sql = "SELECT * FROM ksiazki ORDER BY data_dodania DESC LIMIT 10; ";
  
  
  if ($result = mysqli_query($con, $sql)) {
    echo '<table><tr><th>Autor</th><th id="nazwa">Tytuł</th></tr>';
    while ($row = mysqli_fetch_row($result)) {
      echo '<tr><td>'.$row[4].'</td><td>'.$row[1].'<td></tr>';
    }
    echo '</table>';
    mysqli_free_result($result);
  }
  
  mysqli_close($con);
   ?>