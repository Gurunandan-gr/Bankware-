<?php
include('../../../config.php');
$admin=new Admin();
$id=$_GET['id'];
$query=$admin->ret("select * from `acust` WHERE `cid`='$id'");
$row=$query->fetch(PDO::FETCH_ASSOC);
$name=$row['cname'];
$email=$row['cemail'];



// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'amexiqinfo@gmail.com';                     // SMTP username
    $mail->Password   = 'gcmlepkietirnokq';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('amexiqinfo@gmail.com', 'AMEXIQ');
    $mail->addAddress("$email", "$name");     // Add a recipient
    
    $stmt=$admin->ret("SELECT * FROM `ld` WHERE `cid`='$id'");
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    $bal=$row['bal'];
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'AMEXIQ';
    $mail->Body    = "<h3>hello..$name, your Loan Paid and balance is $bal . </h3>";
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail';

    $mail->send();
    echo 'Message has been sent';
    header("location: ../loanpay.php?id=$id");
} catch (Exception $e) {

    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}