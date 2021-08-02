<?php
  $servername = "localhost";
  $username = "root";
  $password = "iametechstaff";
  $db = "Task_database";

  $TaskName='TaskName';
  $RelatedProj='A';
  $PersonIC='PersonIC';
  $DueDate='2021-08-01';

  //Create connection
  $conn = mysqli_connect($servername, $username, $password, $db);

  //Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  echo "Connection Successful";

  // $sql = "insert into Task (task_name, related_project, person_ic, due_date) values ('airplanes','A','Henry','2021-08-01')";
  // $sql = "insert into Task (task_name, related_project, person_ic, due_date) values ('$TaskName','$RelatedProj','$PersonIC', '$DueDate')";

  $sql = "delete from Task where (related_project = 'A')";
  $result = mysqli_query($conn, $sql);


  // if (mysqli_num_rows($result) > 0) {
  //   echo "Task added";
  // } else {
  //   echo "Error";
  // }

  $conn -> close();
 ?>
