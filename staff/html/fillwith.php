<?php
include '../../config.php';
$admin=new Admin();
$start=$_GET['st'];
$end=$_GET['end'];

$stmt=$admin->ret("SELECT * FROM `withdraw` INNER JOIN `acust` ON withdraw.cid=acust.cid WHERE date(`wdate`) BETWEEN '$start' AND '$end'");
$c=$stmt->rowCount();
if($c==0)
{
    echo "No records Found";
}


while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
?>
<tr>
    <td><?php echo$row['cid'];?></td>
    <td><?php echo$row['cname'];?></td>
    <td><?php echo$row['acno'];?></td>
    <td><?php echo$row['amt'];?></td>
</tr>





<?php
}




?>