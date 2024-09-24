<?php 
include '../../config.php';
$admin=new Admin();
$id=$_GET['id'];
$stmt=$admin->cud("UPDATE `ld` SET `status`='accepted' WHERE `gid`='$id'","updated");
echo"<script>
alert('Loan Accepted Succesfully');
window.location='../html/req.php';
</script>";
?>