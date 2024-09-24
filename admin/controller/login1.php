<?php 
require '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];

$stmt=$admin->ret("SELECT * FROM `adlogin` WHERE `email`='$email' AND `password`='$pass'");


$num = $stmt->rowCount();
if($num>0)
{
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$id= $row['id'];
$_SESSION['aid']=$id;


   echo"<script>
	alert('Login successfull');
    window.location='../html/index.php';
	</script>";
}
else
{
	echo"<script>
	alert('You have entered wrong name');
    window.location.href='../admin/html/login.php';
	</script>";
}

}
?>