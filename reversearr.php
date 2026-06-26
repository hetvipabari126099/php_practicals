<!DOCTYPE html>
<html>
<head>
    <title>Reverse Array</title>
</head>
<body>

<h2>Enter 5 Array Elements</h2>

<form method="post">
    <input type="text" name="arr[]" required><br><br>
    <input type="text" name="arr[]" required><br><br>
    <input type="text" name="arr[]" required><br><br>
    <input type="text" name="arr[]" required><br><br>
    <input type="text" name="arr[]" required><br><br>

    <input type="submit" name="submit" value="Reverse Array">
</form>

<?php
if (isset($_POST['submit'])) {
    $arr = $_POST['arr'];

    echo "<h3>Original Array:</h3>";
    foreach ($arr as $value) {
        echo $value . " ";
    }

    $reverse = array_reverse($arr);

    echo "<h3>Reversed Array:</h3>";
    foreach ($reverse as $value) {
        echo $value . " ";
    }
}
?>

</body>
</html>