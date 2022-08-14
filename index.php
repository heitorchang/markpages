<?php include('header.php'); ?>
    <div class="container">
        <h1>MarkPages</h1>
</div>

<div class="container">
    <?php
$files = scandir(__DIR__ . '/pages/');

foreach ($files as $file) {
  if ($file[0] != '.') {
    echo "<a href=\"page_load.php?filename=$file\">$file</a><br>";
  }
}
?>
</div>
<?php include('footer.php'); ?>