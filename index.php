<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="./css/style_index.css" />
      <link rel="shortcut icon" href="./Images/favicon.png" type="image/x-icon" />
      <title>Biblioteka</title>
   </head>
   <body>
      <div class="parent">
      <div class="div1">
         <nav>
            <img src="Images/biblioteka.png" class="brand-logo"></img>
            <a href="https://google.com" class="links link">Google</a>
            <a class="links link" href="https://google.com">Google</a>
            <a class="links link" href="admin_panel/adminpanel.php">Admin Panel</a>
            </ul>
            <div>
               <div></div>
               <div></div>
               <div></div>
            </div>
         </nav>
      </div>
      <div class="div2">
      <section class="headerContainer">
         <div class="headerWrapper">
            <div class="headerInfo">
               <h1 class="headerTitle">Najnowsze</h1>
               <div>
                  <?php include "last10.php" ?>
               </div>
      </section>
      </div>
      <div class="div4">
      <main>
         <div class="mainContact" id="kontakt">
            <h1 class="contactTitle">Formularz</h1>
            <p>Dodaj nowe książki!</p>
            <form name="form" method="post" action="form.php">
               <div class="form_add">
                  <div class="input">
                     <div>
                        <input type="text" class="form_input" placeholder="Tytuł Książki" name="tytul" id='tytul' required="required" />
                        <input type="text" class="form_input" placeholder="Data Wydania" name="data_wydania" id='data_wydania' required="required" pattern="(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})"/>
                        <input type="text" class="form_input" placeholder="Autor" name="autor" id='autor' required="required"/>
                        <input type="text" class="form_input" placeholder="Numer ISBN" name="numer_isbn" id='numer_isbn' required="required"/>
                        <label for="status">Status Wypożyczenia</label><br>
                        <input type="radio" class="squaredThree" placeholder="Status Wypożyczenia" value="1" name="wypozyczona" id='wypozyczona' />
                     </div>
                  </div>
                  <div class="button">
                     <button id="notification" type="submit" id="submit">Dodaj</button>
            </form>
            </div>
            </div>
            <div class="contactOptions">
               <a
                  href="https://github.com/szymoks11"
                  target="_blank"
                  class="contactOption"
                  >
               <abbr title="GitHub">
               <img
                  src="https://img.icons8.com/ios-glyphs/60/ca7717/github.png"
                  />
               </abbr>
               </a>
            </div>
         </div>
         </div>
         <div class="div3">
            <div class="info">
               <p>Szkolna 3, 56-093 Kiełczów</p>
               <p>tel: 603 603 603</p>
               <p>Godziny Otwarcia: 9:00-16:00</p>
            </div>
         </div>
      </main>
      </div>
      <script src="./js/app.js?ver=1"></script>
   </body>
</html>