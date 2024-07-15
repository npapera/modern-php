<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/simple.css">
    <title>Document</title>
</head>
<body>
    <h3>IF statements in PHP</h3>
    <pre><?php
        include 'vars.php';

        if (true) {
            echo 'Please check the status of the website below.';
            echo "\nAvailable: 🟢\n";
            echo "Unavailable: 🔴\n";
            echo "Mainetenance: 🟠\n";
        }
    ?></pre>

    <pre><?php
        echo "------\n";
        if ($serverStatus === 'ok') {
            echo '🟢 Welcome to our website! Browse and enjoy our content';
        } else if ($serverStatus === 'error') {
            echo '🔴 We\'ve encountered a serious error. Please contact us via phone number or email';
        } else {
            echo '🟠 We\'re currently undergoing maintenance. Please check back later';
        }
        echo "\n------\n";
    ?></pre>

    <pre><?php
        echo "------\n";
        if ($serverStatus === 'ok') echo "🟢🟢🟢🟢";
        if ($serverStatus === "error") echo "🔴🔴🔴🔴";
        if ($serverStatus === 'maintenance') echo "🟠🟠🟠🟠";
        echo "\n------\n";
    ?></pre>
</body>
</html>