<?php 
require_once('./includes/joya.php');

if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_GET['nombre'])
&& isset($_GET['tipo']) && isset($_GET['material']) && isset($_GET['peso'])){
    joya::create_joya($_GET['nombre'], $_GET['tipo'], $_GET['material'], $_GET['peso']);

}




