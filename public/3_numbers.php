<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body bgcolor="gray">
    <h1>TASK: ARITMETHIC OPERATIONS</h1>
    <?php
    $a = 4;
    $b = 6;
    $c = $a + $b;
    echo "<p>a: $a<p>";
    echo "<p>b: $b<p>";
    echo "<p>a+b: ". $a+$b ."<p>";
    echo "<p>a-b: ". $a-$b ."<p>";
    echo "<p>a*b: ". $a*$b ."<p>";
    echo "<p>a/b: ". $a/$b ."<p>";
    echo "<p>a%b: ". $a%$b ."<p>";
    ?>

    <h1>TASK: INCREMENT OPERATIONS</h1>
    <?php
    $a = 4;
    echo "<p>a: $a<p>";
    echo "<p>a++: ". $a++ ."<p>";
    echo "<p>++a: ". ++$a ." because of previous increase<p>";
    ?>

    <h1>TASK: DECREMENT OPERATIONS</h1>
    <?php
    $a = 4;
    echo "<p>a: $a<p>";
    echo "<p>a--: ". $a-- ."<p>";
    echo "<p>--a: ". --$a ." because of previous decrease<p>";
    ?>

    <h1>TASK: NUMBER CHECKING FUNCTIONS</h1>
    <?php
    $a = 4;
    echo "<p>a: $a<p>";
    echo "<p>is_float: ". is_float($a) ."<p>";
    echo "<p>is_numeric: ". is_numeric($a) ."<p>";
    ?>

    <h1>TASK: NUMBER CONVERSION </h1>
    <?php
    $a = 4;
    echo "<p>a: $a<p>";

    $a_string = (string)$a;
    echo "<p>to string: ". $a_string ."<p>";
    echo "<p>". gettype($a_string) ."<p>";

    $a_double = (float)$a;
    echo "<p>to double: ". $a_double ."<p>";
    echo "<p>". gettype($a_double) ."<p>";

    $a_boolean = (boolean)$a;
    echo "<p>to boolean: ". $a_boolean ."<p>";
    echo "<p>". gettype($a_boolean) ."<p>";
    ?>
</body>
</html>


