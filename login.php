<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Cabin:400,700,400italic' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/portfolio/1.png">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
	<?php include("includes/boven.php");
	/*require_once ("includes/Session.php");

    if (isset($_POST['submit'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $user_found = User::verify_user($username, $password);

        if ($user_found) {
            $session->login($user_found);
            if ($_SESSION['role'] == 'admin') {
                redirect("listusers.php");
            } else {
                redirect("index.html");
            }
        } else {
            $the_message = "Your password or username FAILED!";
            echo $the_message;
        }
    } else {
        $username = "";
        $password = "";
    }*/

    ?>
		<!--//header-->

    <!--page_container-->
    <div class="page_container">
    	<div class="wrap">
        	<div class="breadcrumb">
				<div>
					<a href="index.html">Home</a><span>/</span>Login
				</div>
			</div>
            <?php

/**
 * A simple, clean and secure PHP Login Script / MINIMAL VERSION
 *
 * Uses PHP SESSIONS, modern password-hashing and salting and gives the basic functions a proper login system needs.
 *
 * @author Panique
 * @link https://github.com/panique/php-login-minimal/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("connection/db.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
            // the user is logged in. you can do whatever you want here.
            // for demonstration purposes, we simply show the "you are logged in" view.
            include("views/logged_in.php");

            } else {
            // the user is not logged in. you can do whatever you want here.
            // for demonstration purposes, we simply show the "you are not logged in" view.
            include("views/not_logged_in.php");
            }?>
        </div>
    </div>
    <!--//page_container-->

	<!--footer-->
		<?php include("includes/footer.php");?>
</body>
</html>
