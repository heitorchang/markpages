<?php

$filename = $_POST['filename'];
unlink(__DIR__ . '/pages/' . $filename);

header("Location: index.php");
exit();