
<?php session_start();?> 

<!DOCTYPE html>
<html lang="en">

<head>


   <?php  
   
   $admin=$_SESSION["admin"] ;
   
   
   if($_SESSION["admin"]){


   }
   else{
    echo '<script> location.replace("../../adminlogin.php"); </script>';
}
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Marriage Registration</title><link rel = "icon" href = 
"np.png" 
        type = "image/x-icon">

<!-- Bootstrap Core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="../vendor/morrisjs/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <img src="admin.jpg" alt="" style="height:50px; width:50px;"><b>Admin Page <b><nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"></a>
            </div>
            <!-- /.navbar-header -->


            <!-- /.dropdown -->

            <!-- /.dropdown -->
            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Details</a>
                        </li>

                        <li>
                            <a href="addStaff.php"><i class="fa fa-table fa-fw"></i> Staff Login</a>
                        </li>
                        <li>
                            <a href="stafftable.php"><i class="fa fa-table fa-fw"></i> Staff Details </a>
                        </li>
                        <!-- <li>
                            <a href="review.php"><i class="fa fa-table fa-fw"></i> Review Registration </a>
                        </li>
                        <li>
                            <a href="divorceList.php"><i class="fa fa-table fa-fw"></i> Divorce List </a>
                        </li> -->
                        <li>
                            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> LogOut </a>
                        </li>
                        
                        


                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Marriage Registration Office Details</h1>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class=" col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                     <?php
                                     include "connection.php";
                                     $query=("SELECT COUNT(*) as total FROM registrationoffierlist;");
                                     $result=mysqli_query($connection,$query);
                                     $row = mysqli_fetch_array($result);
                                     echo $row['total'];
                                     ?>

                                 </div>

                             </div>
                         </div>
                     </div>
                     <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">Total Registered Officer</span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-list fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">


                                    <?php
                                    include "connection.php";
                                    $query=("SELECT COUNT(*) as total FROM marriagelist;");
                                    $result=mysqli_query($connection,$query);
                                    $row = mysqli_fetch_array($result);
                                    echo $row['total'];
                                    ?>



                                </div>

                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">Total Marriage Registration</span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>


            <!-- /.row -->
            
            <!-- /.panel-footer -->
        </div>
        <!-- /.panel .chat-panel -->
    </div>
    <!-- /.col-lg-4 -->

    <!-- /.row -->
</div>
<!-- /#page-wrapper -->


<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
