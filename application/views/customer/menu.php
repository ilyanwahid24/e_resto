<h2>Dashboard Page</h2>

<h3>Menu</h3>
<h4>Makanan</h4>
<?php foreach ($foods as $food) { ?>
    <?php if ($food->types == 'foods') { ?>
        <p><?= $food->name; ?></p>
        <p><?= $food->prices; ?></p>
        <a href="<?= base_url('orders/ordered') . '?foods=' . $food->id; ?>">Order</a>
    <?php } ?>
<?php } ?>
<h4>Minuman</h4>
<?php foreach ($foods as $food) { ?>
    <?php if ($food->types == 'drinks') { ?>
        <p><?= $food->name; ?></p>
        <p><?= $food->prices; ?></p>
        <a href="<?= base_url('orders/ordered') . '?foods=' . $food->id; ?>">Order</a>
    <?php } ?>
<?php } ?>
<h4>Additional</h4>
<?php foreach ($foods as $food) { ?>
    <?php if ($food->types == 'additional') { ?>
        <p><?= $food->name; ?></p>
        <p><?= $food->prices; ?></p>
        <a href="<?= base_url('orders/ordered') . '?foods=' . $food->id; ?>">Order</a>
    <?php } ?>
<?php } ?>
<a href="<?= base_url('orders/pay/'); ?>">Payment</a>