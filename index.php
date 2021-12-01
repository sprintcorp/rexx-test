<?php
include_once ('config/init.php');

$template = new Template('view/product.php');
$action = new Action();
$filter=false;
$product="";
$customer="";
$price="";
if(isset($_GET['filter'])){
    $filter = $_GET['filter'];
    $product = $_GET['product'] ??'';
    $customer = $_GET['customer'] ?? '';
    $price = $_GET['price'] ?? '';
}
$template->sales = $action->read($filter,$price,$product,$customer)['data'];
$template->total = $action->read($filter,$price,$product,$customer)['total'];
$template->products = $action->fetch_column('product_name');
$template->customers = $action->fetch_column('customer_name');
$template->prices = $action->fetch_column('product_price');
echo $template;

?>