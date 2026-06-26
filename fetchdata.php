<!DOCTYPE html>
<html>
<head>
    <title>HTML Form to PHP</title>
</head>
<body>

<h2>User Registration Form</h2>

<form method="post">
    Name:
    <input type="text" name="username" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];

    echo "<h3>User Details</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>

</body>
</html>