<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  </head>
  <body>
    <?php
    define("MAX_CARGO", 10);
    $cargoApal = 100;
    $cargoBotak = 0;
    $cargoShipHP = 200;

    while ($cargoBotak != 100)
    {
      // Náklad
      $cargoApal = $cargoApal - 10;
      echo "Zásoby z ostrova Apal naloženy na loď.<br />";
      echo "<br />";
      for ($i=0; $i != 6; $i++)
      {
        $pirateDamage = rand(1, 7);
        echo "Piráti vystřelili a udělili $pirateDamage bodů poškození.<br />";
        $cargoShipHP = $cargoShipHP - $pirateDamage;
        if ($cargoShipHP <= 0)
        {
          die("Loď se potopila!<br /><hr /> Zásoby na ostrově Apal: $cargoApal.<br /> Zásoby na ostrově Botak: $cargoBotak.<br />");
        }
        echo "Aktuální stav nákladní lodi je $cargoShipHP HP.<br />";
      }
      echo "<br />";
      //
      // Výklad
      $cargoBotak = $cargoBotak + 10;
      echo "Zásoby vyloženy na ostrov Botak. Loď pluje zpět a protože je bez nákladu, tak upluje pirátům.<br /><br />";
      echo "Zásoby na ostrově Apal: $cargoApal.<br />";
      ?>
      <div style="display: block; height: 11px; width: 101px; border: solid black 1px;">
        <div style="display: block; height: 10px; width: <?php echo $cargoApal ?>px; background-color: red;"></div>
      </div>
      <?php
      echo "Zásoby na ostrově Botak: $cargoBotak.<br />";
      ?>
      <div style="display: block; height: 11px; width: 101px; border: solid black 1px;">
        <div style="display: block; height: 10px; width: <?php echo $cargoBotak ?>px; background-color: red;"></div>
      </div>
      <?php
      echo "HP nákladní lodi: $cargoShipHP.<br />";
      ?>
      <div style="display: block; height: 11px; width: 201px; border: solid black 1px;">
        <div style="display: block; height: 10px; width: <?php echo $cargoShipHP ?>px; background-color: red;"></div>
      </div>
      <hr />
    <?php
    }
    ?>




  </body>
</html>
