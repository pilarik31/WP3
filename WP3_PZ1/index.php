<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
  </head>
  <body>
    <?php
      define("MAXSIZE", 100);
      $totalCargo = 0;
      do
      {
          $crate = rand(1, 5);
          $checkVar = $totalCargo + $crate;
          if ($checkVar > 100)
          {
            break;
          }
          $totalCargo = $totalCargo + $crate;
          echo "Váha bedny: $crate<br />";
          echo "Celková váha: $totalCargo<br /><br />";
          echo "<hr />";
      }
      while (MAXSIZE <= 100);
    ?>
  </body>
</html>
