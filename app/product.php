<?php
include_once ('../config/init.php');
$action = new Action();

if (isset($_POST['submit'])) {
    $jsondata = file_get_contents($_FILES['file']['tmp_name']);
    $data = json_decode($jsondata, true);
    if($action->create($data)){
        redirect('../product.php', 'Json Data Imported', 'success');
    }
}
?>