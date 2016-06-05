<?php
  error_log("Question: ".$_GET['question']);
  file_put_contents("question.log", $_GET['question'].PHP_EOL, FILE_APPEND);

?>
