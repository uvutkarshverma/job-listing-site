<?php include "../config.php" ?>
<?php include "head.php" ?>
<title>Naukari Darpan</title>
<?php include "header.php" ?>

<div class="container">

<h1 class="display-4 fw-bold text-center">Naukari Darpan</h1>
<h2 class="display-4 my-3 text-center">All Post </h2>
<a href="newpost.php"  class="btn btn-outline-success mb-2" type="submit">New Post</a>


    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="">Delete</a></td>
      <td><a href="postedit.php">Edit</a></td>
    </tr>
    
  </tbody>
</table>
</div>



<?php include "footer.php" ?>