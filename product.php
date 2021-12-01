<?php
include_once ('config/init.php');

$template = new Template('view/product.php');
$action = new Action();
$template->sales = $action->read('sales');
echo $template;

?>