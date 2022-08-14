<?php include('header.php'); ?>

<div class="container">
<h1>Confirm deletion</h1>
<form method="post" action="page_delete.php">
    <input name="filename" type="hidden" value="<?= $_GET['filename'] ?>">
    Really delete <code><?= $_GET['filename'] ?></code>?
    <br><br>
    <input type="submit" value="Delete" style="background-color: red;">

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