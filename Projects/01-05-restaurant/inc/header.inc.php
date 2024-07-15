<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/simple.css" />
    <link rel="stylesheet" href="../../styles/custom.css" />
    <title>Culinary Cove &bull; <?php echo $pageTitle; ?></title>
</head>
<body>
  <header class="header-with-background" style="background-image: url('<?php if(!empty($headerImg)): echo $headerImg; else: echo "images/pexels-engin-akyurt-1435904.jpg"; endif; ?>'); ">
    <h1>Culinary Cove</h1>
    <p>Your sanctuary for exceptional flavors</p>
    <nav>
      <?php if(!empty($pageKey) && $pageKey === 'Mission'): ?>
        <?php echo '<a class="active" href="our-mission.php">Our mission</a>'; ?>
      <?php else: ?>
        <?php echo '<a href="our-mission.php">Our mission</a>'; ?>
      <?php endif; ?>

      <?php if(!empty($pageKey) && $pageKey === 'Ingredients'): ?>
        <?php echo '<a class="active" href="ingredients.php">Ingredients</a>'; ?>
      <?php else: ?>
        <?php echo '<a href="ingredients.php">Ingredients</a>'; ?>
      <?php endif; ?>

      <?php if(!empty($pageKey) && $pageKey === 'Menu'): ?>
        <?php echo '<a class="active" href="menu.php">Our Menu</a>'; ?>
      <?php else: ?>
        <?php echo '<a href="menu.php">Our Menu</a>'; ?>
      <?php endif; ?>
    </nav>
  </header>

  <main>