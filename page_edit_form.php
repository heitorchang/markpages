<?php include('header.php'); ?>

<?php

$content = file_get_contents(__DIR__ . "/pages/" . $_GET['filename']);

?>

<div class="container">
<h1>Edit Page</h1>
<form method="post" action="page_edit.php">
    <input name="original_filename" type="hidden" value="<?= $_GET['filename'] ?>">
    Filename: <input name="filename" value="<?= str_replace(".md", "", $_GET['filename']) ?>">.md<br><br>

    <div>
        <div class="flex-row">
            <div class="flex-large">
                <textarea id="editTextarea" name="content" rows="25" cols="60" onkeyup="preview()" autofocus><?= $content ?></textarea>
                <br>
                <input type="submit">
            </div>
            <div class="flex-large">
                <div class="container" id="preview"></div>
            </div>
        </div>
    </div>
</form>
</div>

<script>
 function preview() {
   document.getElementById('preview').innerHTML = marked.parse(document.getElementById("editTextarea").value);
 }

preview();
</script>

</form>
</body>