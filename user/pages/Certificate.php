<?php  
   session_start();
   $Qid=$_SESSION["Cid"] ;
   
   
  if($_SESSION["Cid"]){

  }
  else{
    echo '<script> location.replace("../../coupleLog.php"); </script>';
  }
   ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User</title> <link rel = "icon" href = 
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
        <img src="np.png" alt="NP Govt" ><b>Registered User Page <b><nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"></a>
            </div>
            <!-- /.navbar-header -->

           
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                         <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Registered User Page</a>
                        </li>
                       
                        <li>
                            <a href="Certificate.php"><i class="fa fa-table fa-fw"></i> Marrage Certificate</a>
                        </li>
                         <!-- <li>
                            <a href="divorce.php"><i class="fa fa-table fa-fw"></i> Application For Divorce</a>
                        </li> -->
                        
                        
                        <li>
                            <a  onclick="myFunction()">

<script>
function myFunction() {
    window.print();
}
</script>
<i class="fa fa-print fa-fw"></i>Print Certificate</a>
                        </li>
                        
                        <li>
                            <a href="logout.php"><i class="fa fa-table fa-fw"></i>logOut</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            
            <!-- /.row -->
            <div class="row">

  
 
   <div style="width:800px; height:900px; padding:20px;  border: 10px solid #787878">
<div style="width:750px; height:850px; padding:20px;  border: 5px solid #787878">
      <div style="text-align:center">
        <img src="np.png" width="100" height="100"><br>
           <span style="font-size:18px">Government of Nepal</span><br>
           <span style="font-size:30px;font-weight:bold">Ward No. 11 <br>Kathmandu,Municipality<br></span><br>
           <b> Date of issue: <b> <span  id='date-time'></span><br>
            <span style="font-size:50px; font-weight:bold; font-family:brush script mt""><u> Marriage Certificate</u></span><br>
      </div>
       
       <div style="text-align:justify;">
        <span style="font-size:18px ">
            <?php 
include "connection.php";
$RegID=$_SESSION["Cid"] ;
$query=("select * from marriagelist where RegNo ='$RegID'");
$result=mysqli_query($connection,$query);
if ($result) {
  while ($row = mysqli_fetch_array($result)) {

echo" <br>This is to certify that ,<br><br> <u> <b> ".$row['d2']."<b> </u> Daughter/Son of <u>".$row['f1']."</u> Date of Birth <u>".$row['f1']."</u>
is Married with <u>".$row['f1']."</u> Daughter/Son of <u>".$row['f1']."</u> Date of Birth <u>".$row['f1']."</u> held on <u>".$row['d1']."</u>. 
Registered in my office with Registration serial no <u>".$row['RegNo']."</u> In <u>".$row['date']."</u> Kathmandu Ward No 11. I wish them a Happy Married Life.
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

_____________________________
<br>Sincerely,<br>
Marriage Registration Officer<br>
Kathmandu Ward No.11,<br>
Nepal
"


;}}
?>


</span><br/><br/><br/>


                                       
      </div>
       
       
</div>
</div>

                
       

            
                        
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
<script>
var dt = new Date();
document.getElementById('date-time').innerHTML=dt;
</script>


</html>
