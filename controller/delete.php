<?php
require_once '../config.php';
$admin = new Admin();

$id=$_GET['id'];
{

$stmt=$admin->cud("DELETE FROM `astaff` WHERE `sid`=".$id,"Deleted");

echo"<script>
	alert('Details deleted successfully');
    window.location='../admin/html/viewstaff.php';
	</script>";

}