<?php
include("scripts/dbconnect.php");

$guidelineID = $params['guidelineID'];


$sql = "SELECT * FROM guidelines WHERE guidelineID='" . $guidelineID . "'";
$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
  header('Content-type: application/json');
  echo json_encode($rows);
?>
