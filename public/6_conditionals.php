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
    <h1>TASK: CONDITIONALS IF</h1>
    <?php
    $age = 27;
    echo "<p>Your age: $age</p>";
    if ($age == 27){
        echo "<p>You are: $age</p>";
    }
    ?>

    <h1>TASK: CONDITIONALS IF ELSE</h1>
    <?php
    $age = 25;
    echo "<p>Your age: $age</p>";
    if ($age < 27){
        echo "<p>You are less than 27</p>";
    }else{
        echo "<p>You are olden than 27 </p>";
    }
    ?>

    <h1>TASK: CONDITIONALS IF ELSE AND</h1>
    <?php
    $age = 25;
    $salary = 1000000;
    echo "<p>Your age: $age</p>";
    echo "<p>Your salary: $salary</p>";
    if ($age < 27 and $salary < 5000000){
        echo "<p>You are young and not so rich</p>";
    }else{
        echo "<p>You are olden and a little rich</p>";
    }
    ?>

    <h1>TASK: CONDITIONALS TERNARY </h1>
    <?php
    $age = 28;
    $salary = 1000000;
    echo "<p>Your age: $age</p>";
    echo "<p>Your salary: $salary</p>";
    echo $age < 27 ? "Young " : "Not young ";
    echo $age < 27 ? "Young " : ($age > 25 ? "and healthy" :"and stupid");
    ?>

    <h1>TASK: CONDITIONALS TERNARY </h1>
    <?php
    $age = 28;
    echo "<p>". $myage = $age ? : 18 ."</p>";
    $myaddress = isset($adress) ? $address : " Current Location";
    echo "<p> $myaddress </p>";
    ?>

    <h1>TASK: COALENSCING TERNARY OPERATOR </h1>
    <?php
    $persons = [
        ["name" => "Mihai","hobby" => "Praduiala"],
        ["name" => "Gabi","hobby" => "Barosan"],
    ];
    $result = isset($persons[0]["name"]) ? $persons[0]["name"]: "Anonymous";
    echo "<p> $result </p>";
    ?>

    <h1>TASK: SWITCH </h1>
    <?php
    $age = 10;
    echo "<p>Your age: $age</p>";
    switch ($age):
        case "28":
            echo "<p>You are old as fuck</p>";
            break;
        case "10":
            echo "<p>You are young as fuck</p>";
    endswitch;
    ?>
</body>
</html>

