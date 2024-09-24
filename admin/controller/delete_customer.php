<?php
require_once '../../config.php';
$admin = new Admin();
if(isset($_GET['cid'])){
$cid=$_GET['cid'];


$stmt=$admin->cud("DELETE FROM `acust` WHERE `cid`='$cid' ",'deleted');
echo "<script>alert('Customer Deleted Successfully'); window.location='../html/viewcustomer.php';</script>";
}


?>