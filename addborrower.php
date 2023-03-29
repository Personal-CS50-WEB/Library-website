<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Add New Borrower</title>
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
    <?php
    if (!isset($_SESSION["admin"]) && $_SESSION["admin"] != true) {
      $_SESSION['msg'] = "Unauthorized ";
      header('Location: index.php');
    }
    if (isset($_POST['newborrowername'])) {
      // This is the postback so add the book to the database
    
      # Get data from form
      $newborrowername = trim($_POST['newborrowername']);
      $newborroweraddress = trim($_POST['newborroweraddress']);

      if (!$newborrowername || !$newborroweraddress) {
        printf("You must specify both a name and an address");
        printf("<br><a href=index.php>Return to home page </a>");
        exit();
      }

      $newborrowername = addslashes($newborrowername);
      $newborroweraddress = addslashes($newborroweraddress);

      # Open the database using the "librarian" account
      try {
        $db = new PDO("mysql:host=localhost;dbname=library", "librarian", "librarianpw");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        printf("Unable to open database: %s\n", $e->getMessage());
        printf("<br><a href=index.php>Return to home page </a>");
      }

      // Prepare an insert statement and execute it
      $stmt = $db->prepare("insert into borrowers values (null, ?, ?)");
      $stmt->execute(array("$newborrowername", "$newborroweraddress"));
      printf("<br>Borrower Added!");
      printf("<br><a href=index.php>Return to home page </a>");
      exit;
    }

    // Not a postback, so present the borrower entry form
    ?>

    <h3>Add a new borrower</h3>
    <hr>
    <div class="container-fluid contact-form">
      You must enter both a name and an address
      <form class="form-inline pt-5" action="addborrower.php" method="POST">
        <div class="form-group mb-2">
          <INPUT class="form-control" type="text" name="newborrowername" placeholder="Name">

          <INPUT class="form-control" type="text" name="newborroweraddress" placeholder="Address">
        </div>
        <INPUT class="mx-sm-4 btn btn-primary mb-2" type="submit" name="submit" value="Add Borrower">

      </form>
    </div>
    <?php include('script.html'); ?>
</body>