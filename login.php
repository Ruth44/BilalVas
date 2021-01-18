<?php
session_start();

if(isset($_SESSION['userlogin'])){
    header("Location: index.php");
}
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Log in</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>
<body style="background-color: #09BC8A">

<!-- Begin page -->
<div class="home-btn d-none d-sm-block">
    <a href="index.html" class="text-white"><i class="mdi mdi-home h1"></i></a>
</div>

<div class="wrapper-page">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5">
                <div class="card card-pages shadow-none mt-4">
                    <div class="card-body">
                        <div class="text-center mt-0 mb-3">
                            <a href="index.html" class="logo logo-admin">
                                <img src="assets/images/logo.jpg" class="mt-3" alt="" height="56"></a>
                            <p class="text-muted w-75 mx-auto mb-4 mt-4">Enter your email address and password to access admin panel.</p>
                        </div>

                        <form action="logindb.php" method="post" class="form-horizontal mt-4">

                            <div class="form-group">
                                <div class="col-12">
                                    <label for="username">Username</label>
                                    <input class="form-control" type="text" name="username" required="" id="username" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" name="password" required="" id="password" placeholder="Password">
                                </div>
                            </div>

                     

                            <div class="form-group text-center mt-3">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" name="login" type="submit">Log In</button>
                                </div>
                            </div>

                            

                            

                        </form>

                    </div>

                </div>

            </div>
        </div>
        <!-- end row -->
    </div>
</div>

<!-- <div class="container-sm">

<form>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" id="login">Submit</button>
  </div>
</form> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>

    <script src="../plugins/apexchart/apexcharts.min.js"></script>
    <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

<!-- <script>
$(function(){
    $('#login').click(function(e){
        var valid = this.form.checkValidity();
        if(valid){
            var username = $('#username').val();
            var password = $('#password').val();
        }
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'jslogin.php',
            data: {username: username , password: password},
            success: function(data){
                alert(data);
                if($.trim(data) ==='1'){
                    setTimeout(' window.location.href = "index.php"', 20000);
                }
            },
            error: function(data){
                alert('There were errors')
            }
        })
    })
})
</script> -->
</body>
</html>