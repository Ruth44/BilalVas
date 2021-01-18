<?php
session_start();
if(!isset($_POST['login'])){
    header("Location: login.php");
}else{

    include 'connection.php';
    $name=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM admin WHERE name='$name' AND password='$password' ";
    $mine=mysqli_stmt_init($connection);
    $user=mysqli_num_rows(mysqli_query($connection,$query));
    if($user>=1){
    if(!mysqli_stmt_prepare($mine,$query)){
     header("Location: login.php");
    }else{
    mysqli_stmt_execute($mine);
    $result=mysqli_stmt_get_result($mine);
    while($row=mysqli_fetch_assoc($result)){
        $uname = $row['name'];
        $_SESSION['uname']=$name;
                header("Location: service.php");
        }
    }
}
    else{
    header("Location: login.php?status=unsuccessful");
    }
}



