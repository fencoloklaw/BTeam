<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

  if($_POST){
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $header = 'noreply@fenco.club';

    $full_message = "
    <html>
    <head>
      <title>BTeam Contact Form</title>
    </head>
    <body>
    <p>BTeam Contact Form</p>
    <table>
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Phone Number</th>
    <th>Email Address</th>
    </tr>
    <tr>
    <td>$firstName</td>
    <td>$lastName</td>
    <td>$phone</td>
    <td>$email</td>
    </tr>
    </table>
    <p>$message</p>
    </body>
    </html>
    ";

    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 3; // debugging: 1 = errors and messages, 2 = messages only
//    $mail->SMTPAuth = true; // authentication enabled
//    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "ri87hk4zvi5f@a2plcpnl0102.prod.iad2.secureserver.net";
    $mail->Username = 'ri87hk4zvi5f';
    $mail->Password = 'K=^uuS,6qM';
    $mail->Port = 25; // or 587
    $mail->SetFrom($header);
//    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AddAddress("fencoloklaw@gmail.com");

    if(!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      echo "Message has been sentx";
    }

//    $mail = new PHPMailer(true);
//    $mail->isSMTP();
//    try {
//    $mail->SMTPDebug = 3;
//      $mail->Host = "a2plcpnl0102.prod.iad2.secureserver.net";    // Must be GoDaddy host name
//      $mail->Port = 587;    // Must use port 587 with TLS
//      $mail->SMTPSecure = 'tls';   // ssl will no longer work on GoDaddy CPanel SMTP
//      $mail->SMTPAuth = true;
//      $mail->SetFrom("fencoloklaw@gmail.com", "alias");
//      $mail->AddReplyTo("fencoloklaw@gmail.com", "alias");
//      $mail->Username = 'ri87hk4zvi5f';
//      $mail->Password = 'K=^uuS,6qM';
//      $mail->Subject = $subject;
//      $mail->Body = $full_message;
//      $mail->IsHTML(true);
//      $mail->AddAddress("fencoloklaw@gmail.com", "alias2");
////      $mail->SMTPAutoTLS = true;
//      $mail->send();
//      echo 'Message has been sent';
//    }
//    catch (Exception $e) {
//      http_response_code(500);
//      echo 'Message could not be sent.';
//      echo $e->errorMessage();
//    }
//    catch (\Exception $e){
//      http_response_code(500);
//      echo 'Message could not be sent.';
//      echo $e->getMessage();
//    }
  }
?>
