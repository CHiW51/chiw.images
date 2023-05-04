<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      img {
        width: 100%;
        height: auto;
        box-sizing: border-box;
        border: 2px solid black;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <?php
      $dir = "images/";
      $images = glob($dir."*.{jpg,gif,png,jpeg}", GLOB_BRACE);
      foreach($images as $image) {
        echo '<a href="'.$image.'" download><img src="'.$image.'"></a><br>';
      }
    ?>
  </body>
</html>
