<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">
    <title>Document</title>
</head>
<body>
    <pre><?php
    /*$category1 = 'Programming';
    $category2 = 'Business';
    $category3 = 'Art & Drawing';
    $category4 = 'Self Improvement';
    $category5 = 'History';*/
    echo "array('Programming', 'Business', 'Art & Drawing', 'Self Improvement', 'History')\n";
    //$categories = ['Programming', 'Business', 'Art & Drawing', 'Self Improvement', 'History'];
    $categories = array('Programming', 'Business', 'Art & Drawing', 'Self Improvement', 'History');
    var_dump($categories);
    echo $categories[0] . "\n";
    echo $categories[3] . "\n";

    //$firstCategory = $categories[0];
    //var_dump($firstCategory);
    ?></pre>
</body>
</html>