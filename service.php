<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Bilal Vas Service</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <!-- Logo-->
                    <div>
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.jpg" class="logo-lg" alt="" height="42">
                        </a>
                    </div>
                    <!-- End Logo-->

                    <div class="menu-extras topbar-custom navbar p-0">

                        

                        <ul class="navbar-right ml-auto list-inline float-right mb-0">

                            
                            
                            <li class="dropdown notification-list list-inline-item">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                        <!-- item-->
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
                                        <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                    </div>
                                </div>
                            </li>

                            <li class="menu-item dropdown notification-list list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>

                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- start content -->
            <div style="background-color: #09BC8A">
                <div class="container-fluid">
                    <div class="row align-items-center ">
                        <div class="col-md-8">
                            <div class="page-title-box">
                                <h4 class="page-title"> DASHBOARD</h4>
                                <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Zegva</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0);">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active">Uploads Validation</li>
                                </ol> -->
                            </div>
                        </div>
<!-- 
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block app-datepicker">
                                <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                                <i class="mdi mdi-chevron-down mdi-drop"></i>
                            </div>
                        </div> -->
                    </div>

                    <div class="row top-content">
                        <div class="col-sm-6 col-xl-3">
                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Stat</h5>
                                    <h4 class="text-white pt-1 mb-0">$67,670</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart1"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Stat</h5>
                                    <h4 class="text-white pt-1 mb-0">$7,360</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Stat</h5>
                                    <h4 class="text-white pt-1 mb-0">$5000</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart3"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">

                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Stat</h5>
                                    <h4 class="text-white pt-1 mb-0">$2,480</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">

                    <div id="navigation">

                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li>
                                <a href="index.html"><i class="dripicons-meter"></i> Dashboard</a>
                            </li>

                            <li>
                                <a href="content.php"> Content</a>
                                
                            <li>
                                <a href="#"> Service </a>
                              
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->

    <div class="wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Add Service</h4>

                            <form action="uploadservice.php" method='post'>
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" class="form-control" name='code' required placeholder="Type the service code." />
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name='title' required placeholder="Type the title." />
                                </div>

                                <!-- <div class="form-group">
                                    <label>Equal To</label>
                                    <div>
                                        <input type="password" id="pass2" class="form-control" required placeholder="Password" />
                                    </div>
                                    <div class="mt-2">
                                        <input type="password" class="form-control" required data-parsley-equalto="#pass2" placeholder="Re-Type Password" />
                                    </div>
                                </div> -->

                                
                                <div class="form-group mb-0">
                                    <div>
                                        <button type="submit" name='upload' class="btn waves-effect waves-light">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="mt-0 header-title">Available Services</h4><br>
                        <table class="table table-bordered">
      
      <thead>
        <tr>
          <th scope="col">Code</th>
          <th scope="col">Title</th>
          <th scope="col">Admin</th>
          <th scope="col">Date</th>
        </tr>
      </thead>
      <tbody>
    <?php
     $connection=new PDO("mysql:host=localhost;dbname=bilalvas","Ruth","87654321");
$stat=$connection->prepare("select * from service");
$stat->execute();
    while($row=$stat->fetch()){
        echo "<tr><td>".$row['code']."</td>"."<td>".$row['title']."</td>"."<td>".$row['created_by']."</td>"."<td>".$row['created_at']."</td></tr>";
        
    
    }
        ?>
    </tbody>
    </table>

                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->

    <!-- Footer -->
    <footer class="footer">
        © 2021 Bilalvas.
    </footer>

    <!-- End Footer -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>

    <script src="../plugins/apexchart/apexcharts.min.js"></script>
    <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Parsley js -->
    <script src="../plugins/parsleyjs/parsley.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>

</body>

</html>