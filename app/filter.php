<?php

include_once ('../config/init.php');
$action = new Action();
if (isset($_POST['submit'])) {
    $product = $_POST['product_name'];
    $customer = $_POST['customer_name'];
    $price = $_POST['price'];
    redirect("../product.php?filter=true&product=$product&customer=$customer&price=$price", 'data retrieved', 'success');
}
?>
