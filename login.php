<?php
include "config.php";

if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,
        "SELECT * FROM users WHERE email='$email'"
    );

    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        header("Location: dashboard.php");
    } else {
        $error = "Invalid email or password";
    }
}
?>

<form method="POST">
    <h2>Login</h2>

    <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>

    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>

    <button name="login">Login</button>
</form>