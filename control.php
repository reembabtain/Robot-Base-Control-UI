<?php

// Connect Database
$connection = mysqli_connect("localhost", "root", "", "control");

if (!$connection) {
  die("Database connection failed");
}


if (isset($_POST['switch'])) {

  $on = 1;
  $off = 0;

  $query = "UPDATE switch SET ";
  $query .= "Turn_ON = '$on' , ";
  $query .= "Turn_OFF = '$off' ";

  $result = mysqli_query($connection, $query);
  include "showAllData.php";

  if (!$result) {
    die("Query FAILED" . mysqli_error($connection));
  }
}

// Save values to Database

if (isset($_POST['save'])) {

  $value1 = $_POST['value1'];
  $value2 = $_POST['value2'];
  $value3 = $_POST['value3'];
  $value4 = $_POST['value4'];
  $value5 = $_POST['value5'];
  $value6 = $_POST['value6'];

  $query = "UPDATE data SET ";
  $query .= "Engine1 = '$value1', ";
  $query .= "Engine2 = '$value2', ";
  $query .= "Engine3 = '$value3', ";
  $query .= "Engine4 = '$value4', ";
  $query .= "Engine5 = '$value5', ";
  $query .= "Engine6 = '$value6' ";


  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query FAILED" . mysqli_error($connection));
  }
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Control</title>
</head>
<style>
  body {
    background-color: lightblue;
  }

  h1 {
    color: white;
    font-size: 30px;
    margin-top: 20px;
    margin-left: 100px;
  }

  span {
    font-family: verdana;
    font-size: 15px;
    margin-left: 20px;
  }

  button {
    font-family: verdana;
    font-size: 14px;
    margin-left: 80px;
    margin-top: 10px;
  }
</style>

<body>


  <h1>Control</h1>
  <div class="container">

    <div class="col-sm-6">


      <br>
      <form action="mergeControlPanels.php" method="post">
        <div class="slidecontainer">
          <span class="text_info"> Engine 1:</span>
          <input type="range" name="value1" min="0" max="180" value="0" class="slider" id="myRange1">
          <span id="demo1"></span>
        </div>
        <script>
          var slider1 = document.getElementById("myRange1");
          var output1 = document.getElementById("demo1");
          output1.innerHTML = slider1.value;

          slider1.oninput = function() {
            output1.innerHTML = this.value;
          }
        </script>

        <br>


        <div class="slidecontainer">
          <span class="text_info"> Engine 2:</span>
          <input type="range" name="value2" min="0" max="180" value="0" class="slider" id="myRange2">
          <span id="demo2"></span>
        </div>


        <script>
          var slider2 = document.getElementById("myRange2");
          var output2 = document.getElementById("demo2");
          output2.innerHTML = slider2.value;

          slider2.oninput = function() {
            output2.innerHTML = this.value;
          }
        </script>

        <br>


        <div class="slidecontainer">
          <span class="text_info"> Engine 3:</span>
          <input type="range" name="value3" min="0" max="180" value="0" class="slider" id="myRange3">
          <span id="demo3"></span>
        </div>


        <script>
          var slider3 = document.getElementById("myRange3");
          var output3 = document.getElementById("demo3");
          output3.innerHTML = slider3.value;

          slider3.oninput = function() {
            output3.innerHTML = this.value;
          }
        </script>


        <br>

        <div class="slidecontainer">
          <span class="text_info"> Engine 4:</span>
          <input type="range" name="value4" min="0" max="180" value="0" class="slider" id="myRange4">
          <span id="demo4"></span>
        </div>


        <script>
          var slider4 = document.getElementById("myRange4");
          var output4 = document.getElementById("demo4");
          output4.innerHTML = slider4.value;

          slider4.oninput = function() {
            output4.innerHTML = this.value;
          }
        </script>

        <br>

        <div class="slidecontainer">
          <span class="text_info"> Engine 5:</span>
          <input type="range" name="value5" min="0" max="180" value="0" class="slider" id="myRange5">
          <span id="demo5"></span>
        </div>


        <script>
          var slider5 = document.getElementById("myRange5");
          var output5 = document.getElementById("demo5");
          output5.innerHTML = slider5.value;

          slider5.oninput = function() {
            output5.innerHTML = this.value;
          }
        </script>

        <br>

        <div class="slidecontainer">
          <span class="text_info"> Engine 6:</span>
          <input type="range" name="value6" min="0" max="180" value="0" class="slider" id="myRange6">
          <span id="demo6"></span>
        </div>


        <script>
          var slider6 = document.getElementById("myRange6");
          var output6 = document.getElementById("demo6");
          output6.innerHTML = slider6.value;

          slider6.oninput = function() {
            output6.innerHTML = this.value;
          }
        </script>
        <div>
        </div>
        <br>
        <br>

        <input class="btn btn=-primary" type="submit" name="save" value="Save">
        <!-- <input class="btn btn=-primary" type="submit" name="switch" value="ON/OFF"> -->

      </form>
    </div>
  </div>

  <form action="showAllData.php" method="post">
    <input class="btn btn=-primary" type="submit" name="switch" value="ON/OFF">
  </form>
</body>

</html>