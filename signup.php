<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <title>Sign up</title>
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
        
        if (isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['firstName'])&& isset($_POST['lastName'])&& isset($_POST['confirm_password'])) {
            $firstName = htmlspecialchars($_POST["firstName"] ?? "", ENT_QUOTES);
            $lastName = htmlspecialchars($_POST["lastName"] ?? "", ENT_QUOTES);
            $email = htmlspecialchars($_POST["email"] ?? "", ENT_QUOTES);
            $password = password_hash(htmlspecialchars($_POST["password"] ?? "", ENT_QUOTES), PASSWORD_DEFAULT);
            $confirm_password = $_POST['confirm_password'];
            // check if password and confirm password match
            if($_POST["password"] != $confirm_password){
                $msg = "Passwords do not match";
            }
            else{
                try {
                    $db = new PDO("mysql:host=localhost;dbname=library", "root");
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    printf("Unable to open database: %s\n", $e->getMessage());
                
                }
                 // Prepare an insert statement and execute it
                $stmt = $db->prepare("insert into users values (null, ?, ?, ?, ?, ?, ?)");
                $stmt->execute(array("$firstName", "$lastName", false, null, "$email", "$password"));
                $msg = "Sign up successful!";
                header('Location: loginForm.php');
                exit;
            }
    
            
        }
        ?>
        <?php if (isset($msg)) {
            echo $msg;
        } ?>
        <div class="container-fluid contact-form">
            <form class="form pt-5" action="signup.php" method="POST">
            <div class="col-5">
                    <label for="firstName">First Name:</label>
                    <input class="form-control" type="text" id="firstName" name="firstName" required><br><br>
                </div>
                <div class="col-5">
                    <label for="lastName">Last Name:</label>
                    <input class="form-control" type="text" id="lastName" name="lastName" required><br><br>
                </div>
                <div class="col-5">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" name="email" required><br><br>
                </div>
                <div class="col-5">
                    <label for="password">Password:</label>
                    <input class="form-control" type="password" id="password" name="password" required><br><br>
                </div>
                <div class="col-5">
                    <label for="confirm_password">Confirm Password:</label>
                    <input class="form-control" type="password" id="confirm_password" name="confirm_password" required><br><br>
                </div>
                <input class="mx-sm-4 btn btn-primary mb-2" type="submit" value="Login">
            </form>
        </div>
    </div>
    <?php include('script.html'); ?>
</body>