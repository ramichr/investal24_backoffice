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
$gkBonusProzent = $_GET['gkBonusProzent'];
// $gkBonusEUR = $_GET['gkBonusEUR'];

include 'dbh.inc.php';
include 'functions.inc.php';

if (isset($_GET['accept'])) {
  updateGK($conn, $gKundenId, $gkBonusProzent);
  sendEmail($gkEmail, "
  $gkUsername
  ");
  echo "accept";
} elseif (isset($_GET['decline'])) {
  deleteGK($conn, $gKundenId);
  sendEmail($gkEmail, "
  $gkUsername
  ");
  echo "decline";
}
