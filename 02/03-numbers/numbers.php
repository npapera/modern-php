<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/simple.css">
    <title>Document</title>
</head>
<body>
    <h3>Lesson on numbers in PHP</h3>
    <pre><?php 
        $meaning = 42;
        echo "42 * 42 = " . ($meaning * 42) . "\n";
        echo "42 / 42 = " . ($meaning / 42) . "\n";
        echo "42 + 42 = " . ($meaning + 42) . "\n";
        echo "42 - 42 = " . ($meaning - 42) . "\n";
    ?></pre>
    <p>PHP can still use numbers in string format if they can be converted to numbers.</p>
    <pre><?php
         echo "'5' + '6' = " . '5' + '6';
    ?></pre>
    <p>Rounding numbers</p>
    <pre><?php 
        echo round(3.33, 1);
    ?></pre>
        <p>Mathematical operator shortcuts</p>
    <pre><?php 
        echo '$meaning = 42';
        echo '<br/>';
        $meaning *= 2;
        echo '$meaning*=2 --> ' . $meaning;
        echo '<br/>';
        $meaning /= 2;
        echo '$meaning/=2 --> ' . $meaning;
        echo '<br/>';
        $meaning += 2;
        echo '$meaning+=2 --> ' . $meaning;
        echo '<br/>';
        $meaning -= 2;
        echo '$meaning-=2 --> ' . $meaning;
    ?></pre>
</body>
</html>