<?php
  print '<h1>Ligt het bier al koud?</h1>';
  print '<p><strong>Misschien</strong></p>';
  print '<h1>Wie moet er halen?</h1>';
  $people = array('Yaron');
  $key = array_rand($people);
  print '<em>' . $people[$key] . '</em>';