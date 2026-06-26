<!DOCTYPE html>
<html>
<head>
    <title>Merge Two Arrays</title>
</head>
<body>

<h2>Enter 3 Elements for Array 1</h2>

<form method="post">
    Array 1:<br>
    <input type="text" name="arr1[]" required><br><br>
    <input type="text" name="arr1[]" required><br><br>
    <input type="text" name="arr1[]" required><br><br>

    <h2>Enter 3 Elements for Array 2</h2>

    Array 2:<br>
    <input type="text" name="arr2[]" required><br><br>
    <input type="text" name="arr2[]" required><br><br>
    <input type="text" name="arr2[]" required><br><br>

    <input type="submit" name="submit" value="Merge Arrays">
</form>

<?php
if (isset($_POST['submit'])) {

    $arr1 = $_POST['arr1'];
    $arr2 = $_POST['arr2'];

    echo "<h3>Array 1:</h3>";
    foreach ($arr1 as $value) {
        echo $value . " ";
    }

    echo "<h3>Array 2:</h3>";
    foreach ($arr2 as $value) {
        echo $value . " ";
    }

    $merged = array_merge($arr1, $arr2);

    echo "<h3>Merged Array:</h3>";
    foreach ($merged as $value) {
        echo $value . " ";
    }
}
?>

</body>
</html>