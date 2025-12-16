<?php
include 'db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$student = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    mysqli_query($conn, "UPDATE students SET
        name='$name', email='$email', course='$course'
        WHERE id=$id");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Student</h2>
<form method="POST">
    <input type="text" name="name" value="<?= $student['name']; ?>" required>
    <input type="email" name="email" value="<?= $student['email']; ?>" required>
    <input type="text" name="course" value="<?= $student['course']; ?>" required>
    <button type="submit" name="update">Update</button>
</form>

</body>
</html>
