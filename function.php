<?php
// connect
$db = mysqli_connect("localhost", "root", "", "ccfit");

function query($query){
  global $db;
  $result = mysqli_query($db, $query);

  // Check for query execution success
  if (!$result) {
    die("Error in query: " . mysqli_error($db));
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  // Free the result set
  mysqli_free_result($result);

  return $rows;
}

?>