<?php
include '../config.php';
$admin = new Admin();

if(isset($_POST['add2']))
{
    $name=$_POST['cname'];
    


    $address=$_POST['cadd'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $adhar=$_POST['adno'];
    $acno=$_POST['acno'];
    $act=$_POST['acttype'];
    $doj=$_POST['doj'];
   
    $act;
    
   
    

    $imagename="upload/".basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$imagename);
    $stmt=$admin->ret("SELECT * FROM `acust` WHERE `cemail`='$email' AND `cphone`='$phone'");
    $num=$stmt->rowCount();
    if($num){
        echo"<script>
        alert('Entered Email And Phone Number Is Already Exists');
        window.location=history.back();
             
             </script>";
    }else{
    

    $stmt=$admin->cud("INSERT INTO `acust` (`cname`,`cadd`,`cphone`,`cemail`,`age`,`adhar`,`acno`,`acid`,`doo`,`image`) VALUES('$name','$address','$phone','$email','$age','$adhar','$acno','$act','$doj','$imagename')","saved");


 echo"<script>
alert('Customer added successfully');
window.location='../staff/html/viewcustomer.php';
     
    </script>";
    }
}
?>

