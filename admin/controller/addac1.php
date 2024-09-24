<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['add3']))
{
	$acname=$_POST['ac'];
	$percent=$_POST['percent'];

	
	

	$stmt=$admin->cud("INSERT INTO `actype` (`acname`,`percent`) VALUES('$acname',$percent)","saved");


 echo"<script>
alert('Account added successfully');
window.location='../html/viewaccount.php';
	 
 	</script>";

}

