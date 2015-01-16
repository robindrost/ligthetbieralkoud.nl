<html>
  <head>
    <title>Ligt het bier al koud punt NL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php
      print '<h1>Ligt het bier al koud?</h1>';
      print '<p><strong>Misschien</strong></p>';
      print '<h1>Wie moet er halen?</h1>';
      $people = array('Yaron');
      $key = array_rand($people);
      print '<em class="marquee">' . $people[$key] . '</em>';
    ?>
  </body>
</html>