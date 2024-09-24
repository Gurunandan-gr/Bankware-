<?php include '../config.php'; 
$admin = new Admin(); 
if(isset($_POST['deposite']))
{ 
    $cid=$_POST['cid'];
     $amt=$_POST['amt']; 

    
    //  $stmt=$admin->cud("UPDATE `deposite` SET `id`=`i_quantity` +'$quantity' ,`price`=`price`+'$price' WHERE `sid`='$sid'",'updated'); echo "
    //  <script>window.location='../viewbooking.php'</script>"; } 

    $stmt=$admin->cud("INSERT INTO `deposite` (`amt`,`cid`,`dstatus`) VALUES('$amt','$cid','Deposited')","saved");
    $stmt1=$admin->ret("SELECT * FROM `acust` WHERE `cid`='$cid'");
    $row=$stmt1->fetch(PDO::FETCH_ASSOC);
    $total=$row['total'];
    $subtotal=$total+$amt;
    
    $stmt=$admin->cud("UPDATE `acust` SET `total`='$subtotal' WHERE `cid`='$cid'","Updated");

    
    
    echo"<script>
alert('Deposited successfully');
window.location='../staff/html/viewcustomer.php';
</script>";
}


    ?>