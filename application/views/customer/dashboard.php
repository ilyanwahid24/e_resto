<h2>Welcome to E Resto <?= $resto_name; ?> </h2>
<form action="<?= base_url(); ?>orders" method="post">
    <label for="customer_name">Enter Your Name</label>
    <input type="text" name="customer_name" id="customer_name">
    <button type="submit">Begin to Order</button>
</form>