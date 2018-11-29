<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

if($_POST) {
  $locationOfProperty = "";
  $propertyValue = "";
  $mortgageRequested = "";
  $message = "";
  $firstName = htmlspecialchars($_POST['firstName']);
  $lastName = htmlspecialchars($_POST['lastName']);
  $phone = htmlspecialchars($_POST['phone']);
  $email = htmlspecialchars($_POST['email']);
  $locationOfProperty = htmlspecialchars($_POST['locationOfProperty']);
  $propertyValue = htmlspecialchars($_POST['propertyValue']);
  $mortgageRequested = htmlspecialchars($_POST['mortgageRequested']);
  $subject = "BTeam Submission Form";
  $message = htmlspecialchars($_POST['message']);
  $email_from = 'info@everyjob.ca';
  $full_message = "
    <html>
    <head>
      <title>$subject</title>
    </head>
    <body>
    <p>$subject</p>
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
     <table>
    <tr>
    <th>Location of Property</th>
    <th>Property Value</th>
    <th>Mortgage Requested</th>
    </tr>
    <tr>
    <td>$locationOfProperty</td>
    <td>$propertyValue</td>
    <td>$mortgageRequested</td>
    </tr>
    </table>
    <p>$message</p>
    </body>
    </html>
    ";

  $mail = new PHPMailer(true);
  $mail->isSMTP();
  try {
    $mail->SMTPDebug = 0;
    $mail->Host = "p3plcpnl0944.prod.phx3.secureserver.net";    // Must be GoDaddy host name
    $mail->Port = 465;    // Must use port 587 with TLS
    $mail->SMTPSecure = 'ssl';   // ssl will no longer work on GoDaddy CPanel SMTP
    $mail->SMTPAuth = true;
    $mail->SetFrom("info@everyjob.ca", "Noreply Spreadmarketing");
    $mail->AddReplyTo("info@everyjob.ca", "Noreply Spreadmarketing");
    $mail->Username = 'info@everyjob.ca';
    $mail->Password = 'Spreadmarketing2017!';
    $mail->Subject = $subject;
    $mail->Body = $full_message;
    $mail->IsHTML(true);
    $mail->AddAddress("fencoloklaw@gmail.com", "alias2");
    $mail->SMTPAutoTLS = true;
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
