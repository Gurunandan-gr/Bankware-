<?php
include '../config.php';
$admin = new Admin();

if(isset($_POST['pay'])){
$paid=$_POST['paid'];
$cid=$_POST['cid'];


$stmt=$admin->ret("SELECT * FROM `ld` WHERE `cid`='$cid'");
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

    $bal=$row['bal'];
    $paidd=$row['paid'];

    $balance=$bal-$paid;
    $totpaid=$paidd+$paid;


    $stmt2=$admin->cud("UPDATE `ld` SET `paid`='$totpaid',`bal`='$balance' WHERE `cid`='$cid'","updated");
    echo"<script>
alert('Loan Amount Paid successfully');
window.location='../staff/html/phpmailer/index.php?id=$cid';
</script>";
}
}
?>