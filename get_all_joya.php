<?php
require_once ('includes/joya.php');
if($_SERVER['REQUEST_METHOD']=='GET')
{
    joya::get_all_joya();

}
?>


