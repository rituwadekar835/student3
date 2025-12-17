<?php
include "config.php";

$error = "";

if (isset($_POST['register'])) {

    $username = $_POST['username'] ?? '';
    $email    = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($email) || empty($password)) {
        $error = "All fields are required";
    } else {

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        if (mysqli_num_rows($check) > 0) {
            $error = "Email already exists";
        } else {
            mysqli_query($conn,
                "INSERT INTO users (username,email,password)
                 VALUES ('$username','$email','$hash')"
            );
            header("Location: login.php");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<h1>Register</h1>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<?php if($error!="") echo "<p style='color:red'>$error</p>"; ?>

<form method="POST">

    <input type="text" name="username" placeholder="Username"><br><br>

    <input type="email" name="email" placeholder="Email"><br><br>

    <input type="password" name="password" placeholder="Password"><br><br>

    <button type="submit" name="register">Register</button>

</form>

</body>
</html>
