<?php
  include __DIR__ . "/db.php";
  // var_dump($faqs);

  header("Content-type: application/json");

  echo json_encode($faqs);
 ?>
