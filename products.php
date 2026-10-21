<?php
$title = 'Products';
$all = require 'data/products.php';
$types = array_merge(['All'], array_values(array_unique(array_column($all, 'type'))));
$sel = $_GET['type'] ?? 'All';
$items = array_filter($all, fn($p) => $sel === 'All' || $p['type'] === $sel);
include 'includes/header.php';
?>
<main><h2>Products</h2>
<div class="filters"><?php foreach ($types as $t): ?><a class="<?= $t === $sel ? 'active' : '' ?>" href="?type=<?= urlencode($t) ?>"><?= $t ?></a><?php endforeach; ?></div>
<div class="grid"><?php foreach ($items as $p): ?><div class="card"><h3><?= htmlspecialchars($p['name']) ?></h3><p><?= $p['type'] ?></p><p class="price">&#8369;<?= $p['price'] ?>/kg</p></div><?php endforeach; ?></div></main>
<?php include 'includes/footer.php'; ?>
