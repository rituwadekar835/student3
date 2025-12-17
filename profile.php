<?php
session_start();
include "config.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE id='$user_id'");
$user = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-5">
  <div class="card">
    <div class="card-header bg-dark text-white">
      Profile
    </div>
    <div class="card-body">
      <p><strong>Name:</strong> <?php echo $user['username']; ?>
 </p>
      <p><strong>Email:</strong> <?php echo $user['email']; ?></p>

      <a href="dashboard.php" class="btn btn-primary">Back</a>
    </div>
  </div>
</div>

</body>
</html>