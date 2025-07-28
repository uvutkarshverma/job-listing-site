<?php include "../config.php" ?>
<?php include "head.php" ?>
<title>Naukari Darpan</title>
<?php include "header.php" ?>

<div class="container">

<h1 class="display-4 fw-bold text-center">Naukari Darpan</h1>
<h2 class="display-4 my-3 text-center">New Post </h2>

<form>
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Title </label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
</div>
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Slug </label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Description</label>
  <input type="textarea" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Description</label>
  <input type="textarea" class="form-control" id="editor" placeholder="Another input placeholder">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>





</div>
<script
  src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js">
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<?php include "footer.php" ?>