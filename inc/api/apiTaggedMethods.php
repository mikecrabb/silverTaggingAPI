<?php
include("scripts/dbconnect.php");

$categoryID = $params['categoryID'];

$sql = "SELECT * FROM taggedmethodsview where tagID ='" . $categoryID . "'";
$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
  header('Content-type: application/json');
  echo json_encode($rows);
?>
