<?php
include "config.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<h2>Welcome, <?php echo $_SESSION['user']; ?></h2>
<p>Email: <?php echo $_SESSION['email']; ?></p>

<a href="logout.php">Logout</a>