<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
  </head>
  <body>
    <?php
    $angriness = 0;
    define(MAX_ANGRINESS, 100);
    
    while ($angriness < MAX_ANGRINESS)
    {
      $valueToAdd = rand(2, 7);
      $angriness = $angriness + $valueToAdd;
      if ($angriness > MAX_ANGRINESS)
      {
        $angriness = MAX_ANGRINESS;
      }
      echo "Bylo přidáno $valueToAdd%.<br />";
      echo "Učitel je naštvaný na $angriness%.<br />";
      ?>
      <div style="display: block; height: 11px; width: 101px; border: solid black 1px;">
        <div style="display: block; height: 10px; width: <?php echo $angriness ?>px; background-color: red;"></div>
      </div>
      <?php
      echo "<hr />";
    }
    echo "Naštval si učitele na $angriness%.";
    ?>
    <div style="display: block; height: 11px; width: 101px; border: solid black 1px;">
      <div style="display: block; height: 10px; width: <?php echo $angriness ?>px; background-color: red;"></div>
    </div>
  </body>
</html>
