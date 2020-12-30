<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>TASK: VARIABLES</h1>
    <?php
    $name = "Mihai";
    echo "<p>String: $name<p>";
    $age = 27;
    echo "<p>Integer: $age<p>";
    $height = 1.79;
    echo "<p>Double: $height<p>";
    $male = true;
    echo "<p>Boolean (male): $male<p>";
    $salary = null;

    if ($salary == null):
        echo "<p>Salary: none</p>";
    else:
        echo "<p>Salary: $salary</p>";
    endif;
    ?>

    <h1>TASK: TYPES OF VARIABLES</h1>
    <?php
    echo "<p>Name: " . gettype($name). "</p>";
    echo "<p>Age: " . gettype($age). "</p>";
    echo "<p>Height: " . gettype($height). "</p>";
    echo "<p>Male: " . gettype($male). "</p>";
    echo "<p>Salary: " . gettype($salary). "</p>";
    ?>

    <h1>TASK: DEFINE OF CONSTANTS</h1>
    <?php
    define("PI", 3.14);
    echo "<p>PI: ". PI . "</p>";
    echo "<p>Is Pi defined? ". defined("PI") . "</p>";
    ?>
</body>
</html>

