<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Book Search</title>
  <?php include('../head.html'); ?>
</head>

<body>
  <?php include('../layout.php'); ?>
  <div class="container-fluid contact">
    <div class="container-fluid contact-form"">
      <h3>Search our Book Catalog</h3>
      <hr>
      You may search by title, or by author, or both<br>
      <form class=" form-inline pt-5" action="booksearch.php" method="POST">
      <div class="form-group mb-2">
        <input class="form-control" type="text" name="searchtitle" placeholder="Title">
      </div>
      <div class="form-group mb-2">
        <input class="form-control" type="text" name="searchauthor" placeholder="Author">
      </div>

      <input class="mx-sm-4 btn btn-primary mb-2" type="submit" name="submit" value="Submit">
      </form>
    </div>
  </div>
  <?php include('../script.html'); ?>
</body>

</html>