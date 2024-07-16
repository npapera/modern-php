<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/simple.css" />
    <link rel="stylesheet" href="../../styles/custom.css" />
    <title>Culinary Cove<?php if (!empty($pageTitle)): ?> &bull; <?php echo $pageTitle; ?><?php endif; ?></title>
</head>
<body>
  <?php 
    if (empty($headerImg)) {
      $headerImg = 'images/pexels-engin-akyurt-1435904.jpg';
    }
    if (!isset($pageKey)) {
      $pageKey = '';
    }
  ?>
  <header class="header-with-background" style="background-image: url(<?php echo $headerImg; ?>); ">
    <h1>Culinary Cove</h1>
    <p>Your sanctuary for exceptional flavors</p>
    <nav>
      <a class="<?php if ($pageKey === 'Mission') echo 'active'; ?>" href="our-mission.php">Our mission</a>
      <a class="<?php if ($pageKey === 'Ingredients') echo 'active'; ?>" href="ingredients.php">Our mission</a>
      <a class="<?php if ($pageKey === 'Menu') echo 'active'; ?>" href="menu.php">Our mission</a>
    </nav>
  </header>

  <main>