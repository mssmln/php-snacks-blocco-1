<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php
  $matches = [
    [
      'casa' => 'Vigevano',
      'ospite' => 'Milano',
      'score' => [30,50]
    ],
    [
      'casa' => 'Vicenza',
      'ospite' => 'Roma',
      'score' => [50,100]
    ],
    [
      'casa' => 'Venezia',
      'ospite' => 'Firenze',
      'score' => [70,110]
    ],
  ]
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>snack 1 squadre di basket</title>
</head>
<body>
    <?php # il count corrisponde al metodo length di js
    for ($i = 0; $i < count($matches); $i++){
      // var_dump($matches[$i]); # mostra il contenuto di matches per ogni indice
      $casa = $matches[$i]["casa"]; // li salviamo nelle variabili
      $ospite = $matches[$i]["ospite"];
      $score = $matches[$i]["score"];
    ?>
    <div class="match">
        <h2><?php echo $casa ." - " // li stampiamo ?></h2>
        <h2> <?php echo " - " .$ospite ." | "?></h2>
        <h2><?php echo "  " .$score[0] ." - " .$score[1]?></h2>
    </div>


    <?php } # chiusura del ciclo for?>

</body>
</html>
