<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>TEST</h1>
  <?php 
    $partita1 =[
      'casa' => 'Milano',
      'ptC' => 55,
      'ospite' => 'Roma',
      'ptO' => 60
    ];

    $arr=[
      'p1' => [
        'casa' => 'Torino',
        'ospite' => 'Roma',
        'ptC' => 5,
        'ptO' => 6
    ],
      'p2'=>[
        'casa' => 'Milano',
        'ospite' => 'Roma',
        'ptC' => 55,
        'ptO' => 60
      ]
    ];
    var_dump($arr);
    foreach ($arr as $match) {
        foreach ($match as $key) {
          echo $key."-";
        }
        echo "<br>";
          }
   ?>
   <h1>Correzione</h1>
   <?php 
      $matches=[
      'pp'=>[
        'casa' => 'Torino',
        'ospite' => 'Roma',
        'ptC' => 5,
        'ptO' => 6
    ],
      'cc'=>[
        'casa' => 'Milano',
        'ospite' => 'Roma',
        'ptC' => 55,
        'ptO' => 60
      ]
    ];
    ?>

    <ul>
      <?php 
      foreach ($matches as $match) { ?>
        <li>
          <?php echo $match['casa'] ?> - <?php  echo $match['ospite']?> || <?php  echo $match['ptC']  ?> - <?php   echo $match['ptO']  ?>
        </li>
      <?php } ?>
     
    </ul>
</body>
</html>