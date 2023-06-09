<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Check Book In</title>
  <?php include('../head.html'); ?>
</head>

<body>
  <?php include('../layout.php'); ?>
  <div class="container-fluid contact">
    <?php
    if (!isset($_SESSION["admin"]) && $_SESSION["admin"] != true) {
      $_SESSION['msg'] = "Unauthorized ";
      header('Location: ../index.php');
    }
    $bookid = trim($_GET['bookid']);

    $bookid = addslashes($bookid);

    # Open the database using the "assistant" account
    try {
      $db = new PDO("mysql:host=localhost;dbname=library", "assistant", "assistantpw");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      printf("Unable to open database: %s\n", $e->getMessage());
      printf("<br><a href=../index.php>Return to home page </a>");
    }

    // Prepare an update statement and execute it
    $stmt = $db->prepare("update books set onloan=0, duedate=null, borrowerid=null where bookid = ?");
    $stmt->execute(array("$bookid"));
    printf("<br>Book Checked In!");
    printf("<br><a href=../index.php>Return to home page </a>");
    exit;
    ?>
  </div>
    <?php include('../script.html'); ?>
</body>

</html>