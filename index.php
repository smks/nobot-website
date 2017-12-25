<?php
$games = array_diff(scandir(join('/', [getcwd(), 'releases'])), ['.', '..']);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nobot Game Studios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        Nobot Game Studios
      </h1>
      <h2 class="subtitle">Play our Games</h2>
      <div class="columns">
        <?php 
        $gameLink = '/releases/';

        if (empty($games)) {
          echo '<h3>No Games!</h3>';
        }

        foreach($games as $key => $game) { ?>
          <div class="column">
            <h1><?= str_replace('-', ' ', strtoupper($game)) ?></h1>
            
            <a href="<?=$gameLink . $game . '/index.html'?>">
              <img src="<?='http://cdn.opencanvas.co.uk/automatingwithnodejs/assets/rock-paper-scissors/' . $game . '/banner.jpg'?>" alt="Banner" >
            </a>

          </div>
          <?php if (($key + 1) % 2 == 0) { ?>
            </div><div class="columns">
          <?php } 
        }; ?>
    </div>
  </section>
  </body>
</html>