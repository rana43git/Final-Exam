<!DOCTYPE html>
<html>
<head>
    <title>Age Result</title>
</head>
<body>
<?php
    $age = $_POST['age'];
    if ($age < 100) {
        echo "<p>You are $age years old.</p>";
    } else {
        echo "<p>Invalid Input</p>";
    }
?>
</body>
</html>