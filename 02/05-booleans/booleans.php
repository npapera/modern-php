<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/simple.css">
    <title>Document</title>
</head>
<body>
    <h3>Booleans in PHP</h3>
    <p>Basic Booleans</p>
    <pre><?php 
        var_dump(true);
        var_dump(false);
        echo "-----\n";

    ?></pre>

    <p>Booleans variables</p>
    <pre><?php 
        $value = true;
        var_dump($value);
        echo "-----\n";
    ?></pre>

    <p>Boolean operators</p>
    <pre><?php 
        $meaning = 42;

        //var_dump(42 > 13);
        //var_dump((40 + 2) > 13);
        echo "\$meaning = 42\n";
        echo '$meaning > 13 --> ';
        var_dump($meaning > 13);
        echo '$meaning < 13 --> ';
        var_dump($meaning < 13);
        echo '$meaning >= 13 --> ';
        var_dump($meaning >= 13);
        echo '$meaning <= 13 --> ';
        var_dump($meaning <= 13);
        echo '13 >= 13 --> ';
        var_dump(13 >= 13);
        echo '13 <= 13 --> ';
        var_dump(13 <= 13);
        echo "-----\n";
    ?></pre>

    <p>Equivalent String Booleans</p>
    <pre><?php
        $name = "John";
        echo "\$name = \"John\"\n";
        echo '$name === "John" --> ';
        var_dump($name === "John");
        echo '$name !== "John" --> ';
        var_dump($name !== "John");
        echo "-----\n";
    ?></pre>

    <p>Equivalent Number Booleans</p>
    <pre><?php 
        $age = 30;
        echo "\$age = 30\n";
        echo '$age === 30 --> ';
        var_dump($age === 30);
        echo '$age === \'30\' --> ';
        var_dump($age === '30');
        echo 'Types and values have to be the same in order to be equivalent \'===\'';
        echo "\n-----\n";
        echo '$age == \'30\' --> ';
        var_dump($age == '30');
        echo '$age != \'30\' --> ';
        var_dump($age != '30');
    ?></pre>
</body>
</html>