
<?php
include 'connection.php';
?>
<style>
  footer {
    /* padding: 26px 0 0; */
    background-color: #234a83;
    color: #ffffff;
    font-size: 15px;
    line-height: 26px;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-blend-mode: soft-light;
}
  </style>


<footer id="footer" class="block block-bg-grey-dark"  data-stellar-background-ratio="0.4" style="background-image: url('https://belbarimun.gov.np/sites/belbarimun.gov.np/files/img/BETANA.jpg');">

    <div class="container">

      <div class="row" id="contact">

        <div class="col-md-6">
          <address>
              <strong>WARD NO.11</strong>
              <br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56525.56252055991!2d85.2440992216797!3d27.69110299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b2f8a034ed%3A0x5db5cf18f849a6d2!2sKathmandu%20Metropolitan%20City%20Office%20Ward%20No.%2011!5e0!3m2!1sen!2snp!4v1686887706686!5m2!1sen!2snp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <br>
            </address>
        </div>

        <div class="col-md-6">
          <h4 class="text-uppercase">
          <strong>Contact Us</strong>
            </h4>
            <form accept-charset="UTF-8" role="form" method="POST">
                <fieldset>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="Name" required="1">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
                      <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
                      <input type="text" name="subject" class="form-control" placeholder="Subject" required="1">
                    </div>
                  </div>
                  
                  <div class="form-group">
                <textarea class="form-control" name="message"  placeholder="Message" required="1"></textarea>
                
                </div>
                    
                
                  
                  <input class="btn btn-lg btn-primary btn-block" type="submit" name="button" value="Sent">
                </fieldset>
              </form>
        </div>
 <?php
include 'connection.php';

if(isset($_POST['button'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
 
  

  $date=date("Y/m/d");
  $query="insert into question(name,email, subject, message)
      values('$name','$email','$subject','$message');";
        $result = mysqli_query($connection,$query);
  if($result){
    echo "<script>window.alert('Data Added')</script>";
    
    }
    else{
           echo "<script>window.alert('Data not Added')</script>";
    }
  }



?>
        <!-- <div class="col-md-6">
          <h4 class="text-uppercase">
              Follow Us On:
            </h4> -->
          <!--social media icons-->
          <!-- <div class="social-media social-media-stacked"> -->
            <!--@todo: replace with company social media details-->
            <!-- <a href="#"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
            <a href="#"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
            <a href="#"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a>
            <a href="#"><i class="fa fa-google-plus fa-fw"></i> Google+</a>
          </div>
        </div> -->

      <!-- </div> -->

      <div class="row subfooter">
        <!--@todo: replace with company copyright details-->
        <div class="col-md-7">
          <p>Copyright © Government of Nepal</p>
          <div class="credits">
            
            Designed by <a href="#">SWIFT</a>
          </div>
        </div>
        <!-- <div class="col-md-5">
          <ul class="list-inline pull-right">
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div> -->

      <a href="#top" class="scrolltop">Top</a>

    </div>
  </footer>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <!--Custom scripts demo background & colour switcher - OPTIONAL -->
  <script src="js/color-switcher.js"></script>

  <!--Contactform script -->
  <script src="contactform/contactform.js"></script>

</body>

</html>