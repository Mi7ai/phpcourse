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
    <h1>TASK: STRING FUNCTIONS</h1>
    <?php
    $a = 4255;
    $b = 6;

    echo "<p>number: $a<p>";
    echo "<p>str_pad_left: ". str_pad($a, 8, "0",STR_PAD_LEFT) ."<p>";
    echo "<p>str_pad_right: ". str_pad($a, 8, "0",STR_PAD_RIGHT) ."<p>";
    echo "<p>str_pad_both: ". str_pad($a, 8, "0",STR_PAD_BOTH) ."<p>";

    ?>
</body>
</html>


