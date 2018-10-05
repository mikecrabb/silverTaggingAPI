<?php
include("scripts/dbconnect.php");

$methodID = $params['methodID'];


$sql = "SELECT * FROM methods WHERE methodID='" . $methodID . "'";
$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
  header('Content-type: application/json');
  echo json_encode($rows);
?>
