<?php

$gKundenId = $_GET['gKundenId'];
$gkUsername = $_GET['gkUsername'];
$gkPasswort = $_GET['gkPasswort'];
$gkVorname = $_GET['gkVorname'];
$gkNachname = $_GET['gkNachname'];
$gkFirmenname = $_GET['gkFirmenname'];
$gkRechtform = $_GET['gkRechtform'];
$gkUmsatzsteur = $_GET['gkUmsatzsteur'];
$gkSteurnummer = $_GET['gkSteurnummer'];
$gkAdresse = $_GET['gkAdresse'];
$gkPlz = $_GET['gkPlz'];
$gkStadt = $_GET['gkStadt'];
$gkEmail = $_GET['gkEmail'];
$gkTelefonnummer = $_GET['gkTelefonnummer'];
$BonusProzent = $_GET['BonusProzent'];
// $gkBonusEUR = $_GET['gkBonusEUR'];

include 'dbh.inc.php';
include 'functions.inc.php';

if (isset($_GET['accept'])) {
  updateGK($conn, $gKundenId, $BonusProzent);
  sendEmail(
    $gkEmail,
    "Ihre Geschaeftkunde Antrag",
    "Ihre Geschaeftkunde Antrag wurde angenommen <br> Ihre Username: $gkUsername. <br> Ihre Passwort: $gkPasswort."
  );
  header("Location: ../Geshaftkundenliste.php");
  exit();
} elseif (isset($_GET['decline'])) {
  deleteGK($conn, $gKundenId);
  sendEmail($gkEmail, "Ihre Geschaeftkunde Antrag", "
  Leider Ihre Geschaeftkunde Antrag wurde abgelehnt.
  ");
  header("Location: ../Geshaftkundenliste.php");
  exit();
}
