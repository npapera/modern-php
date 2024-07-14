<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/simple.css" />
    <title>Document</title>
</head>
<body>
    <h2>Lesson 1 on Strings</h2>
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

    <h2>Lesson 2 on Strings</h2>
    <pre><?php
        $greeting = "I\"m learning PHP!";
        echo "{$greeting}_!";
        echo "<br />";
        echo "I'am $name... and I'm learning \"{$subject}\".";
        echo "\n";
        echo 'I"am {$name} and I"m learning {$subject}.';
        echo "\n";
        echo "\t-";
        $abc = "ECHOOOOO!";
    ?></pre>

    <p>A first line of text. <?php echo '<br/>'?>A second line of text</p>
    <p>A first line of text. <?php echo "\n"?>A second line of text</p>
    <p><?php echo 'My last echo, $abc'?></p>
    <p><?php echo "My last echo, {$abc}"?></p>
</body>
</html>