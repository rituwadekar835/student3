<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Management System</h2>
<a href="add.php" class="btn">Add Student</a>

<table>
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Actions</th>
    </tr>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM students");
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['course']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Delete student?')">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
