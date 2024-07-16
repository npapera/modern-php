<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/simple.css">
    <title>Document</title>
</head>
<body>
    <h3>PHP isset() and empty() alternative syntax</h3>
    <pre><?php 
        $pageTitle = 'PHP is amazing!';
        echo '$pageTitle = \'PHP is amazing!\'';
    ?></pre>

    <pre><?php 
        if(!empty($pageTitle)){
            echo "<h1><span>{$pageTitle}</span></h1>";
        }
    ?></pre>

    <?php if(!empty($pageTitle)): ?>
        <h1>
            <span><?php echo $pageTitle; ?></span>
        </h1>
    <?php endif; ?>
</body>
</body>
</html>