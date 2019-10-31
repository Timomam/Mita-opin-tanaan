<?php

require_once("mysqlConnection.php");

?>

<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
        <meta lang="en"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <title>Kauppalista</title>
    </head>

    <body>
        <header>
            <h1>Kauppalista</h1>
        </header>
        <div id="container">
        <form action="lisaa_oivallus.php" method="post">
                <input id="field" type="text" name="lisaa_uusi_oivallus"></input>
                <input id="button" type="submit" value="Lisää uusi">
            </form>
          <div id="table">
          <table style="width:90%">
            <tr>
              <th class="left">Päivä</th>
              <th class="center">Tuote</th> 
              <th class="right">Poista</th>
            </tr>
            <tbody>

<?php

include("listaa_oivallus.php");

?>

                </tbody>
          </table>
        </div>
      </div>
          <footer>
            Copyright 2019 Timo M
          </footer>
    </body>

</html>
