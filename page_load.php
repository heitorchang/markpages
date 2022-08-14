<?php include('header.php'); ?>

<?php

$content = file_get_contents(__DIR__ . '/pages/' . $_GET['filename']);

?>

<div class="container">
<h5><a href="page_edit_form.php?filename=<?= $_GET['filename'] ?>">Edit</a>
&bullet;
<a href="page_delete_confirm.php?filename=<?= $_GET['filename'] ?>">Delete</a></h5>

<h5><?= $_GET['filename'] ?></h5>

        <div id="marked"></div>
</div>

        <script>
         document.getElementById('marked').innerHTML = marked.parse(`<?= str_replace("`", "\\`", str_replace("}", "\}", str_replace("{", "\{", str_replace("\\", "\\\\", $content)))) ?>`);
        </script>

<?php include('footer.php'); ?>