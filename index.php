<?php

// Greetings
$user = "Kim Cyrus";
$pagbati = "Hello, " . $user . ".";

// Prices 
$offer = ["M&M's", 4, 20, 69];
$reg_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];
$saving = $reg_price - $offer_price;
?>

<?php require 'includes/header.php'; ?>

<h2><?= $pagbati ?></h2>

<!-- Offer -->
<p class="offer">
    Buy <strong><?= $offer[1] ?></strong> packs of <strong><?= $offer[0] ?></strong> and enjoy a discount!
</p>

<p>
    Discounted Price: <strong>₱<?= $offer_price ?></strong><br>
    Regular Price: <strong>₱<?= $reg_price ?></strong>
</p>

<?php include 'includes/footer.php'; ?>
