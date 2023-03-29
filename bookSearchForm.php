<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Book Search</title>
  <meta charset="UTF-8">
  <meta name="description" content="Free HTML template">
  <meta name="keywords" content="HTML, template, free">
  <meta name="author" content="Nicola Tolin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Styles -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="vendor/animate/animate.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php include('layout.php'); ?>
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
  <?php include('script.html'); ?>
</body>

</html>