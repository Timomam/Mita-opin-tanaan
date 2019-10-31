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
        <title>Mitä opin tänään?</title>
    </head>

    <body>
        <header>
            <h1>Mitä opin tänään?</h1>
        </header>
        <div id="container">
        <form action="lisaa_oivallus.php" method="post">
                <input type="text" name="lisaa_uusi_oivallus"></input>
                <input type="submit" value="Lisää uusi">
            </form>
          <div id="table">
          <table style="width:80%">
            <tr>
              <th class="left">Päivä</th>
              <th class="center">Oivallus</th> 
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
