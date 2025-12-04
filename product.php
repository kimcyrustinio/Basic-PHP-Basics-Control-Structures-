<?php

$user = "Kim Cyrus";
$greet = "Hello!";

if ($user) {
    $greet = "Hello, " . $user . ".";
}

$product = "M&M's";

$cost = 10;

$totals = [];

for ($i = 1; $i <= 15; $i++) {
    $subtotal = $cost * $i;
    $discount = ($cost / 100) * ($i * 4);

    $totals[$i] = $subtotal - $discount;
}
?>

<?php require 'includes/header.php'; ?>

<h2><?= $greet ?></h2>
<h3> Discounted Prices for <?= $product ?></h3>

<table>
    <tr>
        <th>Packs</th>
        <th>Price (₱)</th>
    </tr>

    <?php foreach ($totals as $quantity => $price): ?>
        <tr>
            <td>
                <?= $quantity ?> pack<?= ($quantity == 1 ? "" : "s") ?>
            </td>
            <td>
                ₱<?= number_format($price, 2) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include 'includes/footer.php'; ?>
