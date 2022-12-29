<?php
$games = array_values(array_diff(scandir(join('/', [getcwd(), 'releases'])), ['.', '..', '.gitkeep']));
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
  <header>
  <div class="container">
  <svg id="ngs-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 277.24 414.6"><defs><style>.cls-1,.cls-2,.cls-3,.cls-4{fill:#8cc84c;stroke:#333;stroke-miterlimit:10;}.cls-1{stroke-width:6px;}.cls-2{stroke-width:7px;}.cls-3{stroke-width:12px;}.cls-4{stroke-width:8px;}</style></defs><title>Artboard 1</title><polygon class="cls-1" points="135.19 137.97 139.81 119.4 116.62 103.42 154.74 95.68 135.68 87.88 140.82 57.41 160.47 57.41 156.28 84.73 182.55 97.24 149.59 111.87 160.4 120 161.43 141.06 135.19 137.97"/><polygon id="Node" class="cls-2" points="148.57 3.99 120.87 21.24 120.87 54.61 148.57 69.72 177.54 53.35 177.54 18.09 148.57 3.99"/><path class="cls-3" d="M52.47,386.51s-43.8-84-8.4-249c0,0,118.2-57,212.4,28.8,0,0-7.8,151.8-46.2,232.8C210.27,399.11,114.87,427.33,52.47,386.51Z"/><ellipse class="cls-4" cx="49.35" cy="280.94" rx="45.35" ry="47.7"/><ellipse class="cls-1" cx="49.35" cy="281.33" rx="28.88" ry="34.41"/><ellipse class="cls-4" cx="227.9" cy="280.94" rx="45.35" ry="47.7"/><ellipse class="cls-1" cx="227.9" cy="281.33" rx="28.88" ry="34.41"/><polygon class="cls-4" points="258.55 209.71 255.36 228.31 172.86 215.69 175.25 183.01 258.55 209.71"/><polygon class="cls-4" points="12.59 208.51 15.78 227.1 98.28 214.49 95.89 181.81 12.59 208.51"/></svg>
    <h1 class="title">Nobot Game Studios</h1>
    <h2 class="subtitle">Play our Games</h2>
</div>
  </header>
  <section class="section">
    <div class="container">
      <?php if (empty($games)) {
          echo '<h3>No Games!</h3>';
      } ?>
      <div class="columns">
        <?php 
        $gameLink = '/releases/';

        foreach($games as $key => $game) { ?>
          <div class="column">
            <h1><?= str_replace('-', ' ', strtoupper($game)) ?></h1>
            
            <a href="<?=$gameLink . $game . '/index.html'?>">
              <img src="<?='https://smks.co.uk/assets/automatingwithnodejs/rock-paper-scissors/' . $game . '/banner.jpg'?>" alt="Banner" >
            </a>

          </div>
          <?php if (($key + 1) % 2 == 0) { ?>
            </div><div class="columns">
          <?php } 
        }; ?>
    </div>
  </section>
  <div id="overlay-container" class="overlay-container is-hidden">
    <div class="overlay-background"></div>
    <div id="close-button" class="cross">&#10006;</div>
    <div id="overlay" class="overlay"></div>
  </div>
  <script src="main.js"></script>
  </body>
</html>
