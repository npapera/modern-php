<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/simple.css" />
    <title>Document</title>
</head>
<body>
    <pre>line1
        line2
    </pre>
    <div>line1
        line2
    </div>
    <pre><?php
        echo 'I am a string!';
        $hold = 'I\'m a string!';
        echo "\nI'm a string!";
        $greeting = "\nI'm a string!";
        echo $greeting;
        echo $greeting . '!!!' . $hold;
        echo '<br />';
        $name = "John";
        $subject = "PHP";
        $text = "I'm " . $name . " and I want to learn the language " . $subject;
        echo $text . "!";
    ?></pre>
</body>
</html>