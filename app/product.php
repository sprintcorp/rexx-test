<?php
include_once ('../config/init.php');
$action = new Action();

if (isset($_POST['submit'])) {
    ini_set('max_execution_time', 300);
    $jsondata = file_get_contents($_FILES['file']['tmp_name']);
    $data = json_decode($jsondata, true);
    if($action->create($data)){
        redirect('../index.php', 'Json Data Imported', 'success');
    }
}
?>