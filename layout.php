<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark">

    <div id="toggler" class="wrapper custom-toggler navbar-toggler" data-toggle="collapse"
        data-target=".navbar-collapse">
        <div class="menu-toggle">
            <span class="icon-bars custom-toggler navbar-toggler-icon"></span>
        </div>
    </div>
    <div id="toggle-nav" class="navbar-collapse collapse">
        <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link h2" href="index.php">PUBLIC LIBRARY</a> </li>
            <?php
            if (isset($_SESSION["admin"]) && $_SESSION["admin"] == true) {
                echo '<li class="nav-item"> <a class="nav-link" href="addbook.php">Add a new book</a> </li>
                <li class="nav-item"> <a class="nav-link" href="addborrower.php">Add a new borrower</a> </li>
                <li class="nav-item"> <a class="nav-link" href="adminsearch.php">Search</a></li>';
            } else {
                echo '<li class="nav-item"> <a class="nav-link" href="bookSearchForm.php">Browse our books</a> </li>
                <li class="nav-item"> <a class="nav-link" href="showreservedbooks.php">Reserved Books</a> </li>
                <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>';
            }
            ?>
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
                echo '<li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>';
            } else {
                echo '<li class="nav-item"> <a class="nav-link" href="signup.php">Sign Up</a> </li>
                <li class="nav-item"> <a class="nav-link" href="loginForm.php">Login</a></li>';
            }
            ?>
        </ul>
    </div>
</nav>