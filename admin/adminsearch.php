<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Book Search for Checkout or Check in</title>
  <?php include('../head.html'); ?>
</head>
<body>
  <?php include('../layout.php'); 
  if (!isset($_SESSION["admin"]) && $_SESSION["admin"] != true) {
    $_SESSION['msg'] = "Unauthorized ";
    header('Location: ../index.php');
  }?>
  <div class="container-fluid contact">
<h3>Search for a book to checkout or checkin</h3>
<hr>
<div class="container-fluid contact-form">
You may search by title, or by author, or both<br>
<form class="form-inline pt-5" action="adminbooksearch.php" method="POST">

<div class="form-group mb-2">
      <INPUT class="form-control" type="text" name="searchtitle" placeholder="Title">
    
      <INPUT class="form-control" type="text" name="searchauthor" placeholder="Author">
</div>
      <INPUT class="mx-sm-4 btn btn-primary mb-2" type="submit" name="submit" value="Submit">
  
</form>
<?php include('../script.html'); ?>
</body>
</html>
