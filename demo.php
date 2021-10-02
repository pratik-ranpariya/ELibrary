 <?php 
 include('config.php');  
session_start();
$conn =  mysqli_connect("localhost", "root", "", "library");

$error="";
if(isset($_POST['submit'])) 
{

   $email = $_POST['email'];
   $mobile = $_POST['mobile'];

   $query = "SELECT * FROM register WHERE email='$email' && mobile='$mobile' && block=0";

     $data = mysqli_query($conn, $query);
     $total = mysqli_num_rows($data);

     if($total==1)
     {
   $error = "successfully login ";
      
              setcookie('email',$_POST['email'],time()+7200,"fee/","",0);
              setcookie('mobile',$_POST['mobile'],time()+7200,"fee/","",0);

             $isCheck=true;
             $_SESSION['email']= $_POST['email'];
             $_SESSION['start'] = time(); // Taking now logged in time.

             // Ending a session in 30 minutes from the starting time.
             $_SESSION['expire'] = $_SESSION['start'] + (7200);
             $_SESSION['email']=$email;
      header('Location: profile.php');
     }else{
     $error = "Your Email Or Password Is Incorrect";
     }

}
?><!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Techradix</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="asset/css/sweetalert.min.css">
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form action="" class="form-signin" method="POST" id="Login">
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">TD</h1>
                  <p class="atomic-mass"></p>
                  <p class="element-name">Techradix</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="email"  id="email" class="form-text" required>
                    <span class="bar"></span>
                    <label>Email</label>
                  </div>
                  
                    <input type="hidden" name="mobile" id="forget-mobile-no"  class="form-text" required>

                <input onclick="phone_btn_onclick();" class="btn col-md-12 " value="submit" />
                <button class="forgot-password text-secondary" type="submit"  name="submit" value="submit" hidden/>
</form> 
              </div>
          </div>
       

      </div>

      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/jquery.ui.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>
      <script src="asset/js/plugins/moment.min.js"></script>
      <script src="asset/js/plugins/icheck.min.js"></script>
      <script src="asset/js/sweetalert.min.js"></script>
      <script src="asset/js/main.js"></script>
      <script src="asset/js/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
<script type="text/javascript">

    AccountKit_OnInteractive = function(){
    AccountKit.init(
      {
        appId:"376047550011699", 
        state:"abcd", 
        version:"v1.1",
        fbAppEventsEnabled:true
      }
    );
  };

    function loginCallback(response) {
    if (response.status === "PARTIALLY_AUTHENTICATED") {
      var code = response.code;
      var csrf = response.state;
        console.log(" code ::::::::::: ", code);
        
        $.post("<?php echo SITE_URL ;?>verify.php", { code : code, csrf : csrf }, function(result){
            console.log("result :::::::::::::: ", result);
            result = JSON.parse(result);
            console.log("result :::::::::::::: ", result, result.national_number);

            if(typeof result.phone.national_number != 'undefined'){

              $('#forget-mobile-no').val(result.phone.national_number);
              $('.forgot-password').trigger('click');

            }else{
              swal("Oops!", "System Error");
            }
        });
        
    }
    else if (response.status === "NOT_AUTHENTICATED") {
      // handle authentication failure
      swal("Oops!", "Contact Details Not Authenticate!");
    }
    else if (response.status === "BAD_PARAMS") {
      // handle bad parameters
      swal("Oops!", "Contact Details Not Authenticate!");   
    }
  }
    
    
  function phone_btn_onclick() {
    // you can add countryCode and phoneNumber to set values
    AccountKit.login('PHONE', {}, // will use default values if this is not specified
      loginCallback);
  }
</script>
   </body>
   </html>