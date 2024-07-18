<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">
    <title>Document</title>
</head>
<>
    <h3>Arrays in PHP</h3>
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

    <h4>PHP functions and arrays</h4>
    <pre><?php 
        $categories = ['Programming', 'Business', 'Art & Drawing', 'Self Improvement', 'History'];
        echo "\$categories = ";
        var_dump($categories);
        
        echo "in_array('Programming', \$categories) --> ";
        var_dump(in_array('Programming', $categories));

        //var_dump($categories[99]); --> Warning(NULL, value doesn't exist)
        echo "isset(\$categories[99]) --> ";
        var_dump(isset($categories[99]));
        echo "empty(\$categories[99]) --> ";
        var_dump(empty($categories[99]));

        if (in_array("Programming", $categories)) {
            echo "Programming is a category on our system.\n";
        }

    ?></pre>
</body>
</html>