<?php


include "emails/email.php";
include "emails/emailPdf.php";

/* ----------------------------------------------------------------------------------------------- */


function updateGK($conn, $gKundenId, $BonusProzent)
{
  $sql = "UPDATE `gKunden` SET `gkBonusProzent` = '$BonusProzent' WHERE gKundenId = '$gKundenId';";

  $result = mysqli_query($conn, $sql);

  return $result;
};

function deleteGK($conn, $gKundenId)
{
  $sql = "DELETE FROM `gKunden` WHERE gKundenId = '$gKundenId';";

  $result = mysqli_query($conn, $sql);

  return $result;
};


function sendEmail($reciever, $subject, $template,)
{
  email($reciever, $subject, $template);
};