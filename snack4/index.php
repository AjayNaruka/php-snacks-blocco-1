<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>SNACK4</h1>
  <?php 

    $num =[];
    var_dump($num);
    for ($i=0; $i < 15; $i++) { 
      $a=rand(0,100);
      if (!in_array($a, num)) {
        array_push($num, $a);
      }
    }
    echo '<hr>';
    var_dump($num)
   ?>
</body>
</html>