<?php

$filename = $_POST['filename'];

if (!isset($_POST['filename']) || $_POST['filename'] == "") {
  $filename = date("Y-m-d_His");
}

$normalized_filename = preg_replace("/\s/", "-", trim($filename)) . '.md';

file_put_contents(__DIR__ . '/pages/' . $normalized_filename, $_POST['content']);

header("Location: index.php");
exit();