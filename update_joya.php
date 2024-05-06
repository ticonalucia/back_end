<?php 
require_once('./includes/joya.php');
 
if($_SERVER['REQUEST_METHOD']== 'PUT'  && isset($_GET['id'])  && isset($_GET['nombre'])
&& isset($_GET['tipo']) && isset($_GET['material']) && isset($_GET['peso'])){
    joya::update_joya($_GET['id'], $_GET['nombre'], $_GET['tipo'], $_GET['material'], $_GET['peso']);
}




?>

