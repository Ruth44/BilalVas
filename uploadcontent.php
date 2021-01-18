<?php
include_once 'connection.php';
session_start();

if(isset($_POST['upload'])){
    $service=$_POST["services"];
    $content=$_POST["content"];
    $username=$_SESSION['uname'];

    $query="SELECT id FROM admin where name='$username'";
    $result=$connection->query($query);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $userid=$row['id'];
            
        }
    
    }
  $date=date("Y-m-d");
    $query="INSERT INTO `content`(`service_code`, `created_at`, `sent`, `content` , `created_by`) VALUES ('$service','$date',0,'$content','$userid')";
    $result=$connection->query($query);
    header("Location: content.php?status=successful");
    
}
else header("Location: content.php?status=unsuccessful");