<?php include '../config.php'; 
$admin = new Admin(); 
if(isset($_POST['withdraw']))
{ 
    $cid=$_POST['cid'];
     $amt=$_POST['amt']; 
     $total=$_POST['total'];
$stmt2=$admin->ret("SELECT * FROM  `acust` WHERE `total`='$total' AND `cid`='$cid'");

if($total<$amt){
       echo"<script>
alert('Insufficient Balance');
window.location='../staff/html/viewcustomer.php';
</script>";

}else{

    $stmt=$admin->cud("INSERT INTO `withdraw` (`amt`,`cid`,`wstatus`) VALUES('$amt','$cid','Withdraw')","saved");

    $stmt1=$admin->ret("SELECT * FROM `acust` WHERE `cid`='$cid'");
    $row=$stmt1->fetch(PDO::FETCH_ASSOC);
    $total=$row['total'];
    $subtotal=$total-$amt;
    
    $stmt=$admin->cud("UPDATE `acust` SET `total`='$subtotal' WHERE `cid`='$cid'","Updated");

    
    
    echo"<script>
alert('Withdraw successfully');
window.location='../staff/html/viewcustomer.php';
</script>";
}

}
    ?>