<?php
$pathdir = __DIR__ . '/pages/';

$zip = new ZipArchive;
$download = "markpages.zip";
$download_timestamp = "markpages_" . date("Y-m-d_His") . ".zip";

$zip->open($download, ZipArchive::CREATE | ZipArchive::OVERWRITE);

foreach(glob($pathdir . '*.md') as $file) {
  $zip->addFile($file, 'markpages/' . substr($file, strrpos($file, '/') + 1));
}

$zip->close();

header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="' . $download_timestamp . '"');
header("Content-Length: " . filesize($download));

readfile($download);
exit();