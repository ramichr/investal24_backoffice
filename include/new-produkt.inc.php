<?php

if (isset($_POST['submit'])) {
  $produktName = $_POST['produktName'];
  $referenz = $_POST['referenz'];
  $gewicht = $_POST['gewicht'];
  $kategorie = $_POST['kategorie'];
  $inventor = $_POST['inventor'];
  $beschreibung = $_POST['beschreibung'];
  $zusatzInfos = $_POST['zusatzInfos'];
  $imageTempName = $_FILES['image']['tmp_name'];
  $image =  addslashes(file_get_contents($imageTempName));

  include "dbh.inc.php";

  $sql = "INSERT INTO `produkt` (	`produktName`	, `beschreibung` ,	`referenz` , `inventor` , `gewicht`	,`kategorie` ,`zusatzInfos`, `image`	) VALUES ('$produktName','$beschreibung', '$referenz', '$inventor','$gewicht', '$kategorie', '$zusatzInfos', '$image')";

  mysqli_query($conn, $sql);

  header("Location: ../produkt-show.php");
  exit();
}