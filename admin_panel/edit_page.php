<?php
   session_start();
   $recordId = $_GET['id'];
   $_SESSION["id"] = $recordId;
   ?>
<!DOCTYPE HTML>
<html lang="pl">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <link rel="stylesheet" href="../css/style_loginpage.css">
      <title>Admin Panel logowanie</title>
   </head>
   <body class="align">
      <div class="grid">
         <?php
            include_once "Common.php";
            $common = new Common();
            $records = $common->getRecordById($connection, $recordId);
            if ($records->num_rows>0){
                $sr = 1;
                while ($record = $records->fetch_object()) {
                    $id = $record->id;
                    $autor = $record->autor;
                    $tytul = $record->tytul;
                    $data_wydania = $record->data_wydania;
                    $data_dodania = $record->data_dodania;
                    $numer_isbn = $record->numer_isbn;
                    $wypozyczona = $record->wypozyczona;?>
         <form action="update.php" method="POST" class="form login">
            <div class="form__field">
               <label for="autor">Autor</label>
               <?php echo '<input type="text" name="autor" class="form__input" placeholder="Autor" value="'. $autor .'">';?>
            </div>
            <div class="form__field">
               <label for="tytul">Tytuł</label>
               <?php echo '<input type="text" name="tytul" class="form__input" placeholder="Tytuł" value="'. $tytul .'">';?>
            </div>
            <div class="form__field">
               <label for="data_wydania">Wydanie</label>
               <?php echo '<input type="text" name="data_wydania" class="form__input" placeholder="Data Wydania" value="'. $data_wydania .'">';?>
            </div>
            <div class="form__field">
               <label for="numer_isbn">ISBN</label>
               <?php echo '<input type="text" name="numer_isbn" class="form__input" placeholder="Numer ISBN" value="'. $numer_isbn .'">';?>
            </div>
            <div class="form__field">
               <label for="wypozyczona">Wypożyczona</label>
               <?php echo '<input type="text" name="wypozyczona" class="form__input" placeholder="Wypożyczona" value="'. $wypozyczona .'">';?>
            </div>
            <div class="form__field">
               <button type="submit">Edytuj</button>
            </div>
         </form>
         <?php
            $sr++;
            }
            }
            ?>
         </form>
         <?php
            if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
            ?>
      </div>
   </body>
</html>