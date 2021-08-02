<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" charset="iso-8859-1">
    <title></title>
  </head>
  <body>
    <?php
      // echo "<script type='text/javascript'>alert('Hi!');</script>";
      $TaskName=$_GET[TaskName];
      $RelatedProj=$_GET[RelatedProj];
      $PersonIC=$_GET[PersonIC];
      $DueDate=$_GET[DueDate];
      //
      // $TaskName='TaskName';
      // $RelatedProj='A';
      // $PersonIC='PersonIC';
      // $DueDate='2021-08-01';

      $servername = "localhost";
      $username = "root";
      $password = "iametechstaff";
      $db = "Task_database";

      //Create connection
      $conn = mysqli_connect($servername, $username, $password, $db);

      //Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "insert into Task (task_name, related_project, person_ic, due_date) values ('$TaskName','$RelatedProj','$PersonIC','$DueDate')";

      // $sql = "insert into Task (task_name, related_project, person_ic, due_date) values ('airplanes','A','Henry','2021-08-01')";
      // $sql = "insert into Task (task_name) values ('A')";
      $result = mysqli_query($conn, $sql);

      // if (result === True) {
      //   echo "<script type='text/javascript'>alert('Task Added!');</script>";
      // } else {
      //   echo "<script type='text/javascript'>alert('Failed!');</script>";
      // }
      //
      // if (mysqli_num_rows($result) > 0) {
      //   echo "New record has added ";
      // } else {
      //   echo "Error " . $sql . "<br>" . $conn->error;
      // }

      $conn -> close();

      // $PersonIC=$_GET[]

      // mysql_connect("localhost:8080", "root", "");
      // mysql_select_db("Task_database");
      // mysql_query("insert into Task values('video','A','Henry','2021-08-01')");
     ?>
  </body>
</html>
