<?php
ini_set('display_errors', 'on');
mb_internal_encoding("UTF-8");
header('Content-Type: text/html; charset=utf-8');
require_once "class/waybill.class.php";
include "elems/driver.php";
$wayBill = new WayBill;
include "elems/layout.php";

?>





