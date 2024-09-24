<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['add1']))
{
	$name=$_POST['name'];
	$address=$_POST['add'];
    $phone=$_POST['phone'];
    $aadar=$_POST['adno'];
    $email=$_POST['email'];
    $doj=$_POST['doj'];
    $pass=$_POST['password'];
    

    $imagename="upload/basename".($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$imagename);
    
    $stmt=$admin->ret("SELECT * FROM `astaff` WHERE `email`='$email' AND `phone`='$phone'");
    $num=$stmt->rowCount();
    if($num){
        echo"<script>
        alert('Entered Email And Phone Number Is Already Exists');
        window.location=history.back();
             
             </script>";
    }else{
	

	$stmt=$admin->cud("INSERT INTO `astaff` (`name`,`address`,`phone`,`adhar`,`email`,`doj`,`password`,`image`) VALUES('$name','$address','$phone','$aadar','$email','$doj','$pass','$imagename')","saved");


 echo"<script>
alert('Staff added successfully');
window.location='../html/viewstaff.php';
	 
 	</script>";
    }
}

