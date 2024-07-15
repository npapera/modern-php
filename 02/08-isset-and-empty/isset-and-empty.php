<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/simple.css">
    <title>Document</title>
</head>
<body>
    <h3>PHP isset() and empty() functions</h3>
    <pre><?php 
        $pageTitle = 'PHP is amazing!';
        $pageTitle1 = 'PHP is amazing!';
        $pageTitle2 = '';

        echo "\$pageTitle = \'PHP is amazing!\'";
        echo 'isset($pageTitle) --> ';
        var_dump(isset($pageTitle1));
        echo 'empty($pageTitle) --> ';
        var_dump(empty($pageTitle1));
        echo "\n";

        echo '$pageTitle = \'\'';
        echo 'isset($pageTitle) --> ';
        var_dump(isset($pageTitle2));
        echo 'empty($pageTitle) --> ';
        var_dump(empty($pageTitle2));
    ?></pre>

    <pre><?php 
        if(isset($pageTitle) && $pageTitle !== ''){
            echo "The variable \$pageTitle exists and is not empty.";
            echo "<h1>{$pageTitle}</h1>";
        }
    ?></pre>

    <pre><?php 
        if(!empty($pageTitle)){
            echo "The variable \$pageTitle is not empty. --> {$pageTitle}";
        }
    ?></pre>
</body>
</body>
</html>