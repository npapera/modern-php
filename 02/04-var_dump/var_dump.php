<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/simple.css">
    <title>Document</title>
</head>
<body>
    <h3>Lesson on var_dump() function</h3>
    <p>var_dump on strings</p>
    <pre><?php 
        var_dump('Hello from a var_dump');
        var_dump('💩');
        var_dump('ä');
    ?></pre>
    <p>var_dump on numbers</p>
    <pre><?php 
        var_dump(123);
        var_dump(42.42);
        echo 'var_dump(\'4\' + 5) --> ';
        var_dump('4' + 5);

    ?></pre>
    <p>var_dump on variables</p>
    <pre><?php 
        $message = "Hello";
        var_dump($message);
    ?></pre>
</body>
</html>