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
    $header = 'fencoloklaw@gmail.com';

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

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    try {
    $mail->SMTPDebug = 2;
      $mail->SetFrom($header);
      $mail->Host = "a2plcpnl0102.prod.iad2.secureserver.net";    // Must be GoDaddy host name
//      $mail->Host = "mail.fenco.club";    // Must be GoDaddy host name
      $mail->Port = 465;    // Must use port 587 with TLS
      $mail->SMTPSecure = 'ssl';   // ssl will no longer work on GoDaddy CPanel SMTP
      $mail->SMTPAuth = true;
//      $mail->Username = 'info@fenco.club';
//      $mail->Password = 'Spreadmarketing2017';
      $mail->Username = 'ri87hk4zvi5f';
      $mail->Password = 'K=^uuS,6qM';
      $mail->Subject = $subject;
      $mail->Body = $full_message;
      $mail->IsHTML(true);
      $mail->AddAddress($email);
      $mail->send();
      echo 'Message has been sent';
    }
    catch (Exception $e) {
      http_response_code(500);
      echo 'Message could not be sent.';
      echo $e->errorMessage();
    }
    catch (\Exception $e){
      http_response_code(500);
      echo 'Message could not be sent.';
      echo $e->getMessage();
    }
  }
?>
