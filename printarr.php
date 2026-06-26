<!DOCTYPE html>
<html>
<head>
    <title>Array Input in PHP</title>
</head>
<body>

<h2>Enter 5 Array Elements</h2>

<form method="post">
    <input type="text" name="arr[]" required><br><br>
    <input type="text" name="arr[]" required><br><br>
    <input type="text" name="arr[]" required><br><br>
    <input type="text" name="arr[]" required><br><br>
    <input type="text" name="arr[]" required><br><br>

    <input type="submit" name="submit" value="Print Array">
</form>

<?php
if (isset($_POST['submit'])) {
    $arr = $_POST['arr'];

    echo "<h3>Array Elements:</h3>";

    foreach ($arr as $value) {
        echo $value . "<br>";
    }
}
?>

</body>
</html>