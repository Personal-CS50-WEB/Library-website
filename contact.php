<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en" class="no-js">

<head>
  <!-- Meta -->
  <title>Contact Us</title>
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
  <!-- Contact -->
  <div class="container-fluid contact">
    <div class="col-md-10 offset-md-1">
      <div class="row">
        <p>
          We would love to hear from you<br>
          liberarys@hollers.com
          <br>
          212 Masonic Hill Road<br>
          18335 - MARSHALLS CREEK - Pennsylvania<br>
          TEL. +1 501-529-4700
        </p>

      </div>
    </div>

  </div>
  <!-- End Contact -->
  <!-- Contact Form -->
  <div class="container-fluid contact-form">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-sm-12">
        <h2> Give us your feedback </h2>
        <form class="form-inline pt-5" action="contactus.php" method="POST">
          <div class="form-group mb-2">
            <input type="email" name="customeremail" class="form-control" id="inputPhone" placeholder="Your email">
          </div>
          <BR>
          <div class="form-group mb-2">
            <label for="message">Your message:</label>
            <textarea class="form-control" name="message" id="message"></textarea>
          </div>
          <div class="form-group mb-2">
            <INPUT type="checkbox" name="replywanted"></td>
            <label for="replywanted"> Do you want replay?</label>

          </div>
          <button type="submit" name="submit" class="mx-sm-4 btn btn-primary mb-2">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>
  <!-- End Contact Form -->
  <!-- Javascript -->
  <?php include('script.html'); ?>
  <!-- End Javascript -->
</body>

</html>