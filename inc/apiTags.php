<?php
include("scripts/dbconnect.php");

$sql = "SELECT * FROM tags";
$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
  header('Content-type: application/json');
  echo json_encode($rows);
?>
