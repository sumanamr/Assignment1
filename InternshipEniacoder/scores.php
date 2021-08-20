<?php

  header('Content-Type', 'application/json');

  include_once 'DatabaseUtilities.php';
  $connection = DatabaseUtilities::getConnection();
  $sql ="select * from players group by name order by score DESC";
  $query =mysqli_query($connection, $sql);

  $scores = [];

  while($rows = mysqli_fetch_assoc($query)) {
    $scores[] = array('id' => $rows['id'], 'name' => $rows['name'], 'score' => $rows['score']);
  }

  echo json_encode($scores);
?>