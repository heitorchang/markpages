<?php

$original_filename = $_POST['original_filename'];
unlink(__DIR__ . '/pages/' . $original_filename);

$filename = $_POST['filename'];

if (!isset($_POST['filename'])) {
  $filename = date("Y-m-d_His");
}

$normalized_filename = preg_replace("/\s/", "-", trim($filename)) . '.md';

file_put_contents(__DIR__ . '/pages/' . $normalized_filename, $_POST['content']);

header("Location: page_load.php?filename=" . $normalized_filename);
exit();