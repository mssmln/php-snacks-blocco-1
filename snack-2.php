<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->

<?php
  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];
  //dovrebbe rimuovere i caratteri non possibili in una mail , disinfetta in pratica
  $mail = filter_var($mail,FILTER_SANITIZE_EMAIL);
  // range minimo e massimo per l'età
  $min = 18;
  $max = 99;


  if (empty($name) && empty($mail) && empty($age)){
    $messaggio = "please provide your name, mail and age";
  } elseif (strlen($name) < 4){ // lunghezza minima accettata per il name di 4
      $messaggio = "at least 4 characters for name";

  } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) { // verifica che sia una mail accettabile con il !
    $messaggio = "type down an acceptable email please";
  } elseif (!filter_var($age,FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) ) { // o con il ! o con === false prima dell'ultima tonda di chiusura
    $messaggio = "type down an acceptable age, from 18 to 99";
  } elseif ((strlen($name) > 3) && (strpos($mail,'@') /* se scrivi qua > -1 accetti la @ come primo carttere */ ) && (strpos($mail,'.')) && is_numeric($age)) {
     $messaggio = "access granted";
   }  else {
     $messaggio = "access denied, check your data again please";
   }


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>snack 2 php con dati GET</title>
</head>
<body>
  <p>
    <?php
      echo $messaggio;
      // echo $mail;
      // var_dump($messaggio);


      // var_dump($_GET);
    ?>
  </p>


</body>
</html>
