<?php
 include '../config.php';
 $admin=new Admin();

 if(isset($_POST['loan'])){
    $cid=$_POST['cid'];
    $lid=$_POST['lid'];
    $aname=$_POST['aname'];
    $occup=$_POST['occup'];
    $source=$_POST['source'];
    $income=$_POST['income'];
    $age=$_POST['age'];
    $quli=$_POST['quli'];
    $ino=$_POST['ino'];
    $idate=$_POST['idate'];
    $s1ad=$_POST['s1ad'];
    $s1ph=$_POST['s1ph'];
    $s2ad=$_POST['s2ad'];
    $s2ph=$_POST['s2ph'];
    $aph=$_POST['aph'];
    $purpose=$_POST['purpose'];
    $af=$_POST['af'];
    $pad=$_POST['pad'];
    $mifo=$_POST['mifo'];
    $period=$_POST['period'];
    $amt=$_POST['amt'];
    $percentage=$_POST['percentage'];
    $month=$_POST['month'];
    $total=$_POST['total'];
    $date=$_POST['date'];
    $status="Pending";

    $image1="upload/".basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'],$image1);

    $image2="upload/".basename($_FILES['mfile']['name']);
    move_uploaded_file($_FILES['mfile']['tmp_name'],$image2);
	

   //  INSERT INTO `ld`(`cid`, `lid`, `cname`, `cphoto`, `occup`, `source`, `income`, `age`, `quli`, `isno`, `isdate`, `s1ad`, `s1phone`, `s2ad`, `s2phone`, `aphone`, `purpose`, `afather`, `address`, `minfo`, `mfile`, `aperoid`, `amt`, `percent`, `month`, `total`, `date`, `status`) VALUES ()
    $stmt=$admin->ret("SELECT * FROM `ld` WHERE `lid`='$lid' AND `cid`='$cid'");
    $num=$stmt->rowCount();
    if($num>0){
      echo "<script>
      alert('Entered Loan Is Already Exist With User');
      window.location='../staff/html/loanstatus.php';
    
      </script>";
    }else{

    $stmt=$admin->cud("INSERT INTO `ld`(`cid`, `lid`, `cname`, `cphoto`, `occup`, `source`, `income`, `age`, `quli`, `isno`, `isdate`, `s1ad`, `s1phone`, `s2ad`, `s2phone`, `aphone`, `purpose`, `afather`, `address`, `minfo`, `mfile`, `aperoid`, `amt`, `percent`, `month`, `total`,`bal`,`date`, `status`) VALUES('$cid','$lid','$aname','$image1','$occup','$source','$income','$age','$quli','$ino','$idate','$s1ad','$s1ph','$s2ad','$s2ph','$aph','$purpose','$af','$pad','$mifo','$image2','$period','$amt','$percentage','$month','$total','$amt','$date','$status')","inserted");
    echo "<script>
    alert('Successfully Requested');
    window.location='../staff/html/loanstatus.php';
  
    </script>";
 }

 }
?>