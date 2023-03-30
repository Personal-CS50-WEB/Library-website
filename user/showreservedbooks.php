<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>List reserved books</title>
  <?php include('../head.html'); ?>
</head>

<body>

  <?php
  include('../layout.php');
  ?>
  <div class="container-fluid contact">

    <?php
    if (!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] != true) {
      $_SESSION['msg'] = "You are not logged In";
      header('Location: ../index.php');
    }
    if (!isset($_SESSION['reservedbooklist'])) {
      echo "You have no reserved books";
      exit;
    }
    echo "You have reserved these books: <br> <br>";
    // The list is maintained as a single string
    // with the titles separated by slashes
    // Split the list into separate titles and print them out
    $reservedbooklist = explode("/", $_SESSION['reservedbooklist']);
    foreach ($reservedbooklist as $reservedbook) {
      echo $reservedbook . "<br>";
    }

    ?>
  </div>
  <?php include('../script.html'); ?>
</body>

</html>