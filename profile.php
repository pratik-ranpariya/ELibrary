<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "library");
if(empty($_SESSION['email']))
{
     header('Location:studentlogin.php');
}
                      
if(isset($_COOKIE['email'])) 
{

$email = $_SESSION['email'];
$query = "SELECT * FROM register WHERE email='$email'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Techradix</title>
 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

      <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/sweetalert.min.css">
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/fullcalendar.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  </head>

 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <?php include('header1.php'); ?>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <?php include('leftmenu1.php') ?>
<!-- start: Content -->
            <div id="content">
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">

                  <?php
                    if($result['networking']==1){
        echo '<div class="col-md-4 col-sm-6 col-xs-6">
                  
                    <div class="panel-body">
                <div class="col-lg-2 col-sm-4 col-4">
                    <a href="comptianetwork.php">
                        <img src="profileimage/logoNetworkPlus.svg" class="rounded" width="246" height="246">
                    </a>
                </div>
                    </div>
                  
                  </div>'; 

      }else{
        echo "";
      }
                          if($result['hardware']==1){
        echo '<div class="col-md-4 col-sm-6 col-xs-6">
                  
                    <div class="panel-body">
                <div class="col-lg-2 col-sm-4 col-4" >
                    <a href="">
                    
                        <img src="profileimage/logoAPlus.svg" alt="" width="246" height="246">

                    </a><br>
                </div>
                  </div>
                  </div>'; 

      }else{
        echo "";
      }
                          if($result['cisco']==1){
        echo '<div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="panel-body">
                <div class="col-lg-2 col-sm-4 col-4">
                    <a href="cisco.php">
                        <img src="profileimage/cisco-2.svg" width="246" height="246">
                    </a>
                </div>
                    </div>
                  </div>'; 

      }else{
        echo "";
      }
              if($result['cloudcomputing']==1){
        echo '<div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="panel-body">
                <div class="col-lg-2 col-sm-4 col-4">
                    <a href="cloud.php">
                      <br>  <img src="profileimage/aws-azure-google-1.png" alt="" width="246" height="160"><br><br><br><br><br>
                    </a>
                    </div>
                  </div>
                  </div>'; 

      }else{
        echo "";
      }

                          if($result['redhetserver']==1){
        echo '<div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="panel-body">
                <div class="col-lg-2 col-sm-4 col-4">
                    <a href="linux.php">
                    
                        <img src="profileimage/clipart25082.png" class="rounded" alt="" width="220" height="220">
                    
                    </a>
                
                    </div>
                  </div>
                  </div>'; 

      }else{
        echo "";
      }
                          if($result['virtualization']==1){
        echo '<div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="panel-body">
                <div class="col-lg-2 col-sm-4 col-4">
                    <a href="virtualization.php">
                        <img src="profileimage/vmware-workstation-logo-e1365515450683.png" alt="" width="180" height="180">
                    </a>
                </div>
                    </div>
                  </div>
                  </div>'; 

      }else{
        echo "";
      }
                          if($result['ethicalhacking']==1){
        echo '<div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="panel-body">
                <div class="col-lg-2 col-sm-4 col-4">
                    <a href="ethicalhacking.php">
                        <img src="profileimage/hacker.svg" alt="" width="210" height="210">
                    </a>
                </div>
                  </div>
                  </div>'; 

      }else{
        echo "";
      }

                                if($result['microsoft']==1){
        echo '<div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="panel-body">
                <div class="col-lg-2 col-sm-4 col-4">
                    <a href="microsoft.php">
                        <img src="profileimage/microsoft-5.svg" alt="" width="190" height="190">
                    </a>
                
                    </div>
                  </div>
                  </div>'; 

      }else{
        echo "";
      }
?>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->
<?php include('mobileleftmenu1.php') ?>
    <?php
    }
    else
    {
     header('Location:studentlogin.php');  
    } 
    ?> 
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

    <!-- start: Javascript -->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/jquery.ui.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
   
    <!-- plugins -->
    <script src="asset/js/plugins/fullcalendar.min.js"></script>
    <script src="asset/js/plugins/jquery.nicescroll.js"></script>
    <script src="asset/js/plugins/jquery.vmap.min.js"></script>
    <script src="asset/js/plugins/maps/jquery.vmap.world.js"></script>
    <script src="asset/js/plugins/jquery.vmap.sampledata.js"></script>
    <script src="asset/js/plugins/chart.min.js"></script>
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/jquery.ui.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
   
  </body>
</html>