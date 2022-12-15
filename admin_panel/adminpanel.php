<?php
  session_start();
  
  if (!isset($_SESSION['zalogowany']))
  {
  header('Location: logging_page.php');
  exit();
  }
  
  ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="../css/style_adminpanel.css">
      <title>Admin Panel</title>
   </head>
   <body>
      <header>
         <hgroup>
            <h1>Admin Panel</h1>
            <a href="../index.php">&larr; Wróć Na Stronę</a>
         </hgroup>
      </header>
      <div class="container">
         <table class="table">
            <thead id="thead">
               <tr>
                  <th>ID</th>
                  <th>Autor</th>
                  <th>Tytuł</th>
                  <th>Data Wydania</th>
                  <th>Data Dodania</th>
                  <th>Numer ISBN</th>
                  <th>Wypożyczona</th>
                  <th>Usuń</th>
                  <th>Edytuj</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  include_once "Common.php";
                  $common = new Common();
                  $records = $common->getAllRecords($connection);
                  if ($records->num_rows>0){
                      while ($record = $records->fetch_object()) {
                          $id = $record->id;
                          $autor = $record->autor;
                          $tytul = $record->tytul;
                          $data_wydania = $record->data_wydania;
                          $data_dodania = $record->data_dodania;
                          $numer_isbn = $record->numer_isbn;
                          $wypozyczona = $record->wypozyczona;?>
               <tr>
                  <th><?php echo $id;?></th>
                  <th><?php echo $autor;?></th>
                  <th><?php echo $tytul;?></th>
                  <th><?php echo $data_wydania;?></th>
                  <th><?php echo $data_dodania;?></th>
                  <th><?php echo $numer_isbn;?></th>
                  <th><?php echo $wypozyczona;?></th>
                  <td><a href="delete-script.php?id=<?php echo $id?>" id="usun"class="btn btn-danger btn-sm">Usuń</a> </td>
                  <td><a href="edit_page.php?id=<?php echo $id?>" id="usun"class="btn btn-success">Edytuj</a> </td>
               </tr>
               <?php }}?>
            </tbody>
         </table>
      </div>
      <div id="content" class="pages">
      <header>
         <div class="brick close">
            <a class="text leave" href="../admin_panel/logout.php">Wyloguj</a>
            <a class="icon ion-close"></a>
         </div>
      </header>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="../js/app.js"></script>
   </body>
</html>