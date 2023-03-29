<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Book Reservation Confirmation</title>
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
    if (!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] != true) {
      $_SESSION['msg'] = "You are not logged In";
      header('Location: index.php');
    }
    // Get the title of the book we're reserving (from the URL)
    $booktoreserve = urldecode($_GET['reservation']);
    if (!isset($_SESSION['reservedbooklist']))
      $reservedbooklist = "";
    else
      $reservedbooklist = $_SESSION['reservedbooklist'];
    // The list is maintained as a single string
    // with the titles separated by slashes
    
    if (!strpos($reservedbooklist, $booktoreserve)) {
      $reservedbooklist = $reservedbooklist . "/" . $booktoreserve;
    }

    $_SESSION['reservedbooklist'] = $reservedbooklist;
    echo "Thank you.  <span class='blue_color'>$booktoreserve </span> has been added to your reservation list";
    echo "<br><a class='nav-item' href=index.php>Return to home page</a>";
    ?>
  </div>
  <?php include('script.html'); ?>
</body>

</html>