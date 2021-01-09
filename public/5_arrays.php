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
    <h1>TASK: ARRAYS & INDEXES</h1>
    <?php
    $a = ["Mihai", "Mihai2", "Mihai3"];

    echo "<p>Names:";
    echo var_dump($a);
    echo "<p>";

    echo "<pre>:";
    echo var_dump($a);
    echo "</pre>";
    echo "";
    ?>

    <h1>TASK: ARRAYS & INDEXES</h1>
    <?php
    echo "<p>First name: $a[0]</p>";

    foreach ($a as $key => $name) {
        echo "<p>Name $key: $name</p>";
    }
    unset($name);
    ?>

    <h1>TASK: ARRAYS & APPEND</h1>
    <?php
//    append element to the end
    array_push($a,"Mihai4");
//    $a [] = "Mihai4";
    echo "<p>Appended: ". $a[count($a)-1] ."</p>";
    foreach ($a as $key => $name) {
        echo "<p>Name $key: $name</p>";
    }
    unset($name);
    ?>

    <h1>TASK: ARRAYS & APPEND AT BEGINNING</h1>
    <?php
    array_unshift($a,"Mihai First");

    foreach ($a as $key => $name) {
        echo "<p>Name $key: $name</p>";
    }
    unset($name);
    ?>

    <h1>TASK: ARRAYS & REMOVE FROM BEGINNING</h1>
    <?php
    array_shift($a);

    foreach ($a as $key => $name) {
        echo "<p>Name $key: $name</p>";
    }
    unset($name);
    ?>

    <h1>TASK: ARRAYS & POP</h1>
    <?php
    echo "<p>Poped: ". array_pop($a)."</p>";

    foreach ($a as $key => $name) {
        echo "<p>Name $key: $name</p>";
    }
    unset($name);
    ?>

    <h1>TASK: SPLIT STRING INTO ARRAY</h1>
    <?php
    $s = "Hi, how, are, you";
    echo $s;
    echo "<pre>";
    echo var_dump(explode(",",$s));
    echo "</pre>";
    ?>

    <h1>TASK: COMBINE ARRAY INTO STRINGS</h1>
    <?php
    echo "<pre>";
    echo var_dump(implode(",",$a));
    echo "</pre>";
    ?>

    <h1>TASK: ARRAY CONTAINS ELEM</h1>
    <?php
    echo in_array("Mihai",$a);
    ?>

    <h1>TASK: ARRAY INDEX ELEM</h1>
    <?php
    echo "<p>Search: Mihai ".array_search("Mihai",$a)."</p>";
    ?>

    <h1>TASK: ARRAY FILTER</h1>
    <?php
    $numbers = [1,2,3,4,5,6];
    $filter = array_filter($numbers, function ($n) {
        return $n % 2 === 0;
    });
    echo "<pre>";
    echo var_dump($filter);
    echo "</pre>";

    echo array_reduce($numbers,function ($carry, $item){
        return $carry + $item;
    })
    ?>

</body>
</html>


