<?php
include "config.php";

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand">Student App</a>
    <div>
      <a href="profile.php" class="btn btn-warning btn-sm">Profile</a>
      <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
  </div>
</nav>

<!-- DASHBOARD -->
<div class="container mt-4">
  <div class="row">

    <div class="col-md-4 mb-3">
      <div class="card text-bg-primary">
        <div class="card-body">
          <h5>Total Students</h5>
          <h2>10</h2>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card text-bg-success">
        <div class="card-body">
          <h5>Active Users</h5>
          <h2>5</h2>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card text-bg-warning">
        <div class="card-body">
          <h5>Tasks</h5>
          <h2>7</h2>
        </div>
      </div>
    </div>

  </div>
</div>

</body>
</html>
