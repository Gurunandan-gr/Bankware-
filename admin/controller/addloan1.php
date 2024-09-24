<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['add2']))
{
	$lname=$_POST['loan'];
	$ldesc=$_POST['ldesc'];

	
	

	$stmt=$admin->cud("INSERT INTO `aloan` (`lname`,`ldesc`) VALUES('$lname','$ldesc')","saved");


 echo"<script>
alert('Loan added successfully');
window.location='../html/viewloan.php';

	 
 	</script>";

}

