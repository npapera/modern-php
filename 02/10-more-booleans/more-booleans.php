<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/simple.css">
    <title>Document</title>
</head>
<body>
    <h3>More Booleans in PHP</h3>
    <pre><?php
        var_dump(!true);
        var_dump(!false);

        $number = 5;
        var_dump($number !== 5);
        var_dump(!($number === 5));
        echo "-----\n";

        var_dump(true && true);
        var_dump(false && true);
        var_dump(true && false);
        var_dump(false && false);
        echo "-----\n";

        $views = 50000;
        if ($views >= 10000 && $views <= 100000) {
            echo "This is a medium performing video.\n";
        }
        echo "-----\n";

        var_dump(true || true);
        var_dump(false || true);
        var_dump(true || false);
        var_dump(false || false);
        echo "-----\n";

        var_dump(true xor true);
        var_dump(false xor true);
        var_dump(true xor false);
        var_dump(false xor false);
    ?></pre>
</body>
</html>