<?php 
require '../config.php';

$control = new Controller();
$admin = new Admin();

if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];

$stmt=$admin->ret("SELECT * FROM `astaff` WHERE `email`='$email' AND `password`='$pass'");


 $num = $stmt->rowCount();
if($num>0)
{
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$id= $row['sid'];

$_SESSION['aid']=$id;


   echo"<script>
	alert('Login successfull');
    window.location='../staff/html/index.php';
	</script>";
} 
else {
	echo "<script>
	alert('You have entered wrong');
	window.location='../staff/html/slogin.php';
	
	</script>";
}




}
?>