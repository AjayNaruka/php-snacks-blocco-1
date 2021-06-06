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
    $posts = [
    '10/01/2019' => [
        'aa'=>[
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
   ?>
   <hr>
   <h1> <?php 
        foreach ($posts as $date => $value1) { /* value1 indica l'array interno su cui faccio un secondo ciclo - date indica il nome dell'indice. In questo caso essendo associativo indica la data DD/MM/YYYY */ 
          echo $date.'<br>';
          foreach ($value1 as $post => $value) {
            echo $post . ') '.$value['title'] . ' ' .$value['author'] . ' '.$value['text'] .'<br>';
          }
          echo '<hr>';
        }
    ?> </h1>


</body>
</html>