<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Book Reservation Confirmation</title>
  <?php include('../head.html'); ?>
</head>

<body>
  <?php include('../layout.php'); ?>
  <div class="container-fluid contact">
    <?php
    if (!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] != true) {
      $_SESSION['msg'] = "You are not logged In";
      header('Location: ../index.php');
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
    echo "<br><a class='nav-item' href=../index.php>Return to home page</a>";
    ?>
  </div>
  <?php include('../script.html'); ?>
</body>

</html>