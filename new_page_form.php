<?php include('header.php'); ?>

<div class="container">
<h1>New Page</h1>
<form method="post" action="new_page.php">

    Filename: <input name="filename" autofocus>.md<br><br>
    <div>
        <div class="flex-row">
            <div class="flex-large">
                <textarea id="editTextarea" name="content" rows="25" cols="60" onkeyup="preview()"></textarea>
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
</script>

</form>
</body>