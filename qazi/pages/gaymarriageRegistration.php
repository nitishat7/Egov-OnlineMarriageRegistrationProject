<?php  
   session_start();
   $Qid=$_SESSION["Qid"] ;
   
   
  if($_SESSION["Qid"]){

  }
  else{
    echo '<script> location.replace("../../login.php"); </script>';
  }
   ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .next{
      float:right;
    }
    #next1{
      float:left;
    }
    .next2{
      float:right;
    }
    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Officer Page</title> <link rel = "icon" href = 
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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
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

            <img src="np.png" alt="NP Govt" ><b>Civil Marriage Registration Officer <b> <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                          <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>  Registration Details</a>
                        </li>
                       
                        <li>
                            <a href="marrageRegistration.php"><i class="fa fa-table fa-fw"></i> Marrage Registration </a>
                        </li>
                        <li>
                            <a href="gaymarriageRegistration.php"><i class="fa fa-table fa-fw"></i> Gay Marrage Registration </a>
                        </li>
                        <li>
                            <a href="Registrationlist.php"><i class="fa fa-table fa-fw"></i> Registration List </a>
                        </li>
                       
                        
                         <li>
                            <a href="logout.php"><i class="fa fa-table fa-fw"></i> LogOut </a>
                        </li>
                        
                      
                       
                    </ul>
                </div>
             
            </div>
         
        </nav>
    <div id="page-wrapper">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">Same-Sex Marriage Registration Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success"></h3>
        <hr/>
        <div class="well">
          <table>
            <tbody>
             <form method="POST"  enctype="multipart/form-data">
             <h4><b>Applicant 1 Details </b></h4>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>1. District/Ward No  </b></h4> </label>
    <input type="text" class="form-control" name="d1" id="exampleInputPassword1" placeholder="Eg. Kathmandu Ward No 11" required="" >
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>2. Applicant Name  </b></h4> </label>
    <input type="text" class="form-control" name="d2" id="exampleInputPassword1" placeholder="Eg. Junga Bahadur"  required="">
  </div>
  

  <div class="form-group">
  <label for="exampleInputPassword1"><h4><b>3. Photo of Applicant </b></h4> </label>
    <input type="file" class="custom-file-input" name="p1" id="exampleInputPassword1" placeholder=""  required="">

  </div>
  

  <div class="form-group">
    

    <label for="exampleInputPassword1"><h4><b>4. Applicant's Father’s Full-Name</b></h4> </label>
    <input type="text" class="form-control" id="next1" name="f1" id="exampleInputPassword1" placeholder="Eg. Junga Bahadur"  required="">
  
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>5. Permanent Address of Applicant:</b></h4> </label>
    <input type="text" class="form-control" name="a1" id="exampleInputPassword1" placeholder="Eg. Gaushala, Kathmandu"  required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>5. Temporary Address of Applicant:</b></h4> </label>
    <input type="text" class="form-control" name="a1" id="exampleInputPassword1" placeholder="Eg. Gaushala, Kathmandu"  required="">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>6.Age of Applicant:</b></h4> </label>
    <input type="number" class="form-control" name="d3" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>6. CitizenShip NO. of Applicant:</b></h4> </label>
    <input type="number" class="form-control" name="d3" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>6. Contact Number Applicant:</b></h4> </label>
    <input type="number" class="form-control" name="d3" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>6. Email Applicant:</b></h4> </label>
    <input type="email" class="form-control" name="d3" id="exampleInputPassword1" placeholder="johndoe@gmail.com" required="">
  </div>

  <h4><b>Applicant 2 Details </b></h4>

  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>1. Applicant Name  :</b></h4> </label>
    <input type="text" class="form-control" name="d4" id="exampleInputPassword1" placeholder="Eg. Sita Chhetri"required="">
  </div>


  <div class="form-group">
  <label for="exampleInputPassword1"><h4><b>2. Photo of Applicant </b></h4> </label>
    <input type="file" class="custom-file-input" name="p2" id="exampleInputPassword1" placeholder=""  required="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>3. Applicant's  Father’s name :</b></h4> </label>
    <input type="text" class="form-control" name="f2" id="exampleInputPassword1" placeholder="Eg. Junga Bahadur" required="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>4.Temporary Address of Applicant:</b></h4> </label>
    <input type="text" class="form-control" name="a2" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>4.Permanent Address of Applicant:</b></h4> </label>
    <input type="text" class="form-control" name="a2" id="exampleInputPassword1" placeholder="" required="">
  </div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>5. Age of the Applicant:</b></h4> </label>
    <input type="number" class="form-control"  name="d6" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>6. CitizenShip NO. of Applicant:</b></h4> </label>
    <input type="number" class="form-control" name="d3" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>6. Contact Number Applicant:</b></h4> </label>
    <input type="number" class="form-control" name="d3" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>6. Email Applicant:</b></h4> </label>
    <input type="email" class="form-control" name="d3" id="exampleInputPassword1" placeholder="johndoe@gmail.com" required="">
  </div>


  <h4><b>Applicant 1 Witness Details </b></h4>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>1. Legal Witness </b></h4> </label>
    <input type="text" class="form-control" name="d7" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>2. Lawyer's ID NO:</b></h4> </label>
    <input type="number" class="form-control"  name="d6" id="exampleInputPassword1" placeholder="" required="">
  </div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>3. Witness 1</b></h4> </label>
    <input type="text" class="form-control" name="d7" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>4. Witness CitizenShip No:</b></h4> </label>
    <input type="number" class="form-control"  name="d6" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>5. Address of Witness:</b></h4> </label>
    <input type="text" class="form-control" name="a2" id="exampleInputPassword1" placeholder="" required="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>6. Witness 2</b></h4> </label>
    <input type="text" class="form-control" name="d7" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>7. Witness CitizenShip No:</b></h4> </label>
    <input type="number" class="form-control"  name="d6" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>8. Address of Witness:</b></h4> </label>
    <input type="text" class="form-control" name="a2" id="exampleInputPassword1" placeholder="" required="">
  </div>

  <h4><b>Applicant 2 Witness Details </b></h4>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>1. Legal Witness </b></h4> </label>
    <input type="text" class="form-control" name="d7" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>2. Lawyer's ID NO:</b></h4> </label>
    <input type="number" class="form-control"  name="d6" id="exampleInputPassword1" placeholder="" required="">
  </div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>3. Witness 1</b></h4> </label>
    <input type="text" class="form-control" name="d7" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>4. Witness CitizenShip No:</b></h4> </label>
    <input type="number" class="form-control"  name="d6" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>5. Address of Witness:</b></h4> </label>
    <input type="text" class="form-control" name="a2" id="exampleInputPassword1" placeholder="" required="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>6. Witness 2</b></h4> </label>
    <input type="text" class="form-control" name="d7" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>7. Witness CitizenShip No:</b></h4> </label>
    <input type="number" class="form-control"  name="d6" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>8. Address of Witness:</b></h4> </label>
    <input type="text" class="form-control" name="a2" id="exampleInputPassword1" placeholder="" required="">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>1. Date on which the marriage was contracted:</b></h4> </label>
    <input type="date" class="form-control" name="d12" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>First Marriage of Applicant</b></h4> </label>
    <input type="checkbox" class="form-control" name="d21" id="exampleInputPassword1" placeholder="" required>Yes
    <input type="checkbox" class="form-control" name="d21" id="exampleInputPassword1" placeholder="" required>No
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>First Marriage of Applicant</b></h4> </label>
    <input type="checkbox" class="form-control" name="d21" id="exampleInputPassword1" placeholder="" >Yes
    <input type="checkbox" class="form-control" name="d21" id="exampleInputPassword1" placeholder="" >No
  </div>



  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>Date of registration of marriage: </b></h4> </label>
    <input type="date" class="form-control" name="d24" id="exampleInputPassword1" placeholder="" required="">
  </div>


  <div class="form-group">
  <label for="exampleInputPassword1"><h4><b>32.Sign of Marriage Register Officer </b></h4> </label>
    <input type="file" class="custom-file-input" name="p3" id="exampleInputPassword1" placeholder=""  required="">


  </div>



  <div class="form-group">
    </tbody>
    </table>
                <div class=col-sm-10">
                    <button type="submit" name="btn" class="btn btn-success btn-block"><h4><b> Register  Information</b></h4></button>
                </div>
         
            </div>

            

<?php 




                  include "connection.php";
                  $Qid=$_SESSION["Qid"] ;

                  if(isset($_POST['btn'])){


////file upload

$target_dir = "uploads/";
$target_file1 = $target_dir . basename($_FILES["p1"]["name"]);
$target_file2 = $target_dir . basename($_FILES["p2"]["name"]);
$target_file3 = $target_dir . basename($_FILES["p3"]["name"]);

$uploadOk = 1;
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
$imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

     $check1 = getimagesize($_FILES["p1"]["tmp_name"]);
    $check2 = getimagesize($_FILES["p2"]["tmp_name"]);
    $check3 = getimagesize($_FILES["p3"]["tmp_name"]);

    if($check1 !== false && $check2 !== false && $check3 !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<script>window.alert('File is not Image ')</script>";
        $uploadOk = 0;
    }
if (file_exists($target_file1)&&file_exists($target_file2)&&file_exists($target_file3)) {
    
    echo "<script>window.alert('Sorry, file already exists rename your image. ')</script>";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&& $imageFileType1 != "gif" ) {
    
  echo "<script>window.alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed. ')</script>";
    $uploadOk = 0;
}
if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
&& $imageFileType2 != "gif" ) {
    echo "<script>window.alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed. ')</script>";
    $uploadOk = 0;
}
if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
&& $imageFileType3 != "gif" ) {
    echo "<script>window.alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed. ')</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["p1"]["tmp_name"], $target_file1)) {
        echo "The file ". basename( $_FILES["p1"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    if (move_uploaded_file($_FILES["p2"]["tmp_name"], $target_file2)) {
        echo "The file ". basename( $_FILES["p2"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    if (move_uploaded_file($_FILES["p3"]["tmp_name"], $target_file3)) {
        echo "The file ". basename( $_FILES["p3"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
       

       /////end file upload           


                    $date=date("Y/m/d");
                    $RegNo=rand(11111111,99999999);
                    
                    $f1= $_POST['f1']; 
                    $f2= $_POST['f2']; 
                    $a1= $_POST['a1'];
                    $a2= $_POST['a2'];
                     


                    $d1=$_POST['d1'];
                    $d2=$_POST['d2'];
                    $d3=$_POST['d3'];
                    $d4=$_POST['d4'];
                    $d5=$_POST['d5'];
                    $d6=$_POST['d6'];
                    $d7=$_POST['d7'];
                    $d8=$_POST['d8'];
                    $d9=$_POST['d9'];
                    $d10=$_POST['d10'];
                    $d11=$_POST['d11'];
                    $d12=$_POST['d12'];
                    $d13=$_POST['d13'];
                    $d14=$_POST['d14'];
                    $d15=$_POST['d15'];
                    $d16=$_POST['d16'];
                    $d17=$_POST['d17'];
                    $d18=$_POST['d18'];
                    $d19=$_POST['d19'];
                    $d20=$_POST['d20'];
                    $d21=$_POST['d21'];
                    $d22=$_POST['d22'];
                    $d23=$_POST['d23'];
                    $d24=$_POST['d24'];
                    $d25=$_POST['d25'];
                    $d26=$Qid;
                    $sign=$target_file3;
                    $photoW=$target_file2;
                    $photoH=$target_file1;


                  


             $query="insert into marriagelist
(date,RegNo,d1,d2,f1,a1,d3,d4,f2,a2,d5,d6,d7,d8,d9,d10,d11,d12,d13,d14,d15,d16,d17,d18,d19,d20,d21,d22,d23,d24,d25,d26,sign,photoW,photoH)
values('$date','$RegNo','$d1','$d2','$f1','$a1','$d3','$d4','$f2','$a2','$d5','$d6','$d7','$d8','$d9','$d10','$d11','$d12','$d13',
'$d14','$d15','$d16','$d17','$d18','$d19','$d20','$d21','$d22','$d23','$d24','$d25','$d26','$sign','$photoW','$photoH');";
                        $result = mysqli_query($connection,$query);
                        if($result){
                          echo "<script>window.alert('Data added')</script>";
                                   }
                        else{

                          echo "<script>window.alert('Problem')</script>";

                        }


                echo '<script> location.replace("index.php"); </script>';
    
}


                 ?>


          </form>
        </div>
    </div>
</div>
            

                </div>






        
                    </div>
                   

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
