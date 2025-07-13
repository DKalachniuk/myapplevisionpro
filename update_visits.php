<?php
$file = 'visits.txt'; // Path to the text file storing the visit count

if (isset($_GET['count'])) {
  $count = $_GET['count'];
  file_put_contents($file, $count);
}
?>
