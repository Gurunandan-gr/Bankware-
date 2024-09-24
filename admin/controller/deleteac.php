<?php
require_once '../../config.php';
$admin = new Admin();

$id=$_GET['id'];
{

$stmt=$admin->cud("DELETE FROM `actype` WHERE `acid`=".$id,"Deleted");

echo"<script>
	alert('Details deleted successfully');
    window.location='../html/viewaccount.php';
	</script>";

}