<?php

use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;


require_once './PHPmailer/Exception.php';
require_once './PHPmailer/PHPMailer.php';
require_once './PHPmailer/SMTP.php';

/* ----------------------------------------------------------------------------------------------- */


function updateGK($conn, $gKundenId, $gkBonusProzent)
{
  $sql = "UPDATE `gKunden` SET `gkBonusProzent` = '$gkBonusProzent' WHERE gKundenId = '$gKundenId';";

  $result = mysqli_query($conn, $sql);

  return $result;
};

function deleteGK($conn, $gKundenId)
{
  $sql = "DELETE FROM `gKunden` WHERE gKundenId = '$gKundenId';";

  $result = mysqli_query($conn, $sql);

  return $result;
};


function sendEmail($gkEmail, $email_subject, $email_message,)
{

  $mail = new PHPMailer(true);

  //Server settings
  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  // $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'smtp@schnur-partner.de';                     //SMTP username
  $mail->Password   = 'Benefit15!!';                               //SMTP password
  // $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
  // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
  $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom('smtp@schnur-partner.de', 'investal24');
  $mail->addAddress($gkEmail);     //Add a recipient

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = $email_subject;
  $mail->Body = $email_message;
  $mail->send();
};
