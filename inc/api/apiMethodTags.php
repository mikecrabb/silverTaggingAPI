<?php
include("scripts/dbconnect.php");

$categoryID = $params['categoryID'];

$sql = "SELECT distinct tagID, methodID, tagName FROM taggedmethodsview where methodID ='" . $categoryID . "'";
$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
  header('Content-type: application/json');
  echo json_encode($rows);
?>
