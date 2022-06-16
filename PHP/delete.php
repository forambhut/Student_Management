<?php

  include("db.php");

  $id=$_GET['del'];
  $query = "DELETE FROM `student_list` WHERE ID = $id";
  $result = mysqli_query($mysql, $query);
  header("Location: demo.php");
?>