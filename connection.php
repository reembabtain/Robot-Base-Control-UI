<?php
include "controlPanel.html";
?>

<?php

$connection = mysqli_connect("localhost", "root", "", "control");

if (!$connection) {
  die("Database connection failed");
}


if (isset($_POST['forward'])) {
  $forward = "forward";
  $query = "UPDATE data SET ";
  $query .= "direction = '$forward' ";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query FAILED" . mysqli_error($connection));
  }
}

if (isset($_POST['left'])) {
  $left = "left";
  $query = "UPDATE data SET ";
  $query .= "direction = '$left' ";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query FAILED" . mysqli_error($connection));
  }
}

if (isset($_POST['stop'])) {
  $stop = "stop";
  $query = "UPDATE data SET ";
  $query .= "direction = '$stop' ";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query FAILED" . mysqli_error($connection));
  }
}

if (isset($_POST['right'])) {
  $right = "right";
  $query = "UPDATE data SET ";
  $query .= "direction = '$right' ";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query FAILED" . mysqli_error($connection));
  }
}

if (isset($_POST['backward'])) {
  $backward = "backward";
  $query = "UPDATE data SET ";
  $query .= "direction = '$backward' ";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query FAILED" . mysqli_error($connection));
  }
}










?>
