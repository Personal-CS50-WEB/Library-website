<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Contact Us</title>
  <?php include('../head.html'); ?>
</head>

<body>
  <?php include('../layout.php'); ?>
  <div class="container-fluid contact">
    <?php

    // Get the data from the form
    // This version has basic error checking
    
    if ($_POST["customeremail"] == "") {
      echo "You did not enter an email address";
      echo "<br> <a href=../index.php>Return to home page</a>";
      exit;
    }

    if (!preg_match("/[a-z]+@[a-z]+\.[a-zA-Z]{2,6}$/", $_POST["customeremail"])) {
      echo "Email address is not valid";
      exit;
    }
    $customeremail = $_POST["customeremail"];
    $message = $_POST["message"];
    $replywanted = false;
    if (isset($_POST["replywanted"]))
      $replywanted = true;

    // Build the text of the email
    $t = "You have received a message from " . $customeremail . " :\n";
    $t = $t . $message . "\n";
    if ($replywanted)
      $t = $t . "A reply was requested";
    else
      $t = $t . "No reply was requested";


    // Give the user a nice warm fuzzy feeling
    echo "Thank you. Your message has been sent";

    ?>
  </div>
  <?php include('../script.html'); ?>
</body>

</html>