<?php $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\'); ?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($title ?? 'MeatLink') ?> - MeatLink</title><link rel="stylesheet" href="<?= $base ?>/assets/styles.css"></head><body>
<header><h1>MeatLink</h1><nav><a href="<?= $base ?>/index.php">Home</a><a href="<?= $base ?>/products.php">Products</a><a href="<?= $base ?>/contact.php">Contact</a></nav></header>
