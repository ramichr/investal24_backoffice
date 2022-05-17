<?php

include "./dbh.inc.php";

header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"export.csv\"");

$sql = 'SELECT * FROM `kunden`';

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  echo implode("||", [
    $row["username"],
    $row["anrede"],
    $row["geschlecht"],
    $row["vorname"],
    $row["nachname"],
    $row["geburtsdatum"],
    $row["nationalitat"],
    $row["addresse"],
    $row["plz"],
    $row["stadt"],
    $row["email"],
    $row["telefonnummer"],
    $row["ausweisnummer"],
    $row["anmeldDatum"]
  ]);
  echo "\r\n";
}