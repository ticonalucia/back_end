<?php 
require_once('./includes/joya.php');

if($_SERVER['REQUEST_METHOD']== 'DELETE' && isset($_GET['id'])){
    joya:: delete_joya($_GET['id']);
}
?>
