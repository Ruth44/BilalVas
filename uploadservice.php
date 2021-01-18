<?php
include_once 'connection.php';
session_start();

if(isset($_POST['upload'])){
    $code=$_POST["code"];
    $title=$_POST["title"];
    $username=$_SESSION['uname'];

    $query="SELECT id FROM admin where name='$username'";
    $result=$connection->query($query);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $userid=$row['id'];
            
        }
  $date=date("Y-m-d");
    $query="INSERT INTO `service`(`code`, `title`, `created_by`, `created_at`) VALUES ('$code','$title','$userid','$date')";
    $result=$connection->query($query);
    header("Location: service.php?status=successful");
}
}
else header("Location: service.php?status=unsuccessful");