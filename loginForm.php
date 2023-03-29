<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <title>Login</title>
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
        
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = htmlspecialchars($_POST["email"] ?? "", ENT_QUOTES);
            $password = htmlspecialchars($_POST["password"] ?? "", ENT_QUOTES);
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            try {
                $db = new PDO("mysql:host=localhost;dbname=library", "root");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                printf("Unable to open database: %s\n", $e->getMessage());

            }
            // Prepare an select statement and execute it
            $query = "select * from users where email ='" . $email . "'";
            try {
                $sth = $db->query($query);
                $user = $sth->rowCount();
                if ($user == 0) {
                    $msg = "Invalid login details";
                    header('Location: loginForm.php');
                    exit;
                }
                $row =$sth->fetch(PDO::FETCH_ASSOC); // fetch the first row of the result set
                if (password_verify($password, $row['password'])) {
                    $_SESSION['email'] = $email;
                    
                    $_SESSION['firstName'] = $row['firstName'];
                    $_SESSION["admin"] = $row['isAdmin'];
                    $_SESSION["loggedin"] = true;
            
                    header('Location: index.php');
                }

            } catch (PDOException $e) {
                printf("We had a problem: %s\n", $e->getMessage());
            }
            $msg = "Login successful!";
            exit;

        }
        ?>
        <?php if (isset($msg)) {
            echo $msg;
        } ?>
        <div class="container-fluid contact-form">
            <form class="form pt-5" action="loginForm.php" method="POST">
                <div class="col-5">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" name="email" required><br><br>
                </div>
                <div class="col-5">
                    <label for="password">Password:</label>
                    <input class="form-control" type="password" id="password" name="password" required><br><br>
                </div>
                <input class="mx-sm-4 btn btn-primary mb-2" type="submit" value="Login">
            </form>
        </div>
    </div>
    <?php include('script.html'); ?>
</body>

</html>