<?php
/**
 * Created by PhpStorm.
 * User: brisingir
 * Date: 18-3-18
 * Time: 20:09
 */

session_start();
session_destroy();
$_SESSION['isLoggedIn'] = false;
?>

<p>You have been logged out</p>
<p>Click <a href="index.php">here</a> to return to the login page.</p>