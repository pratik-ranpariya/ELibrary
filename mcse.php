<?php
session_start();
error_reporting(0);
include('config.php');
if(empty($_SESSION['email']))
{
    header('Location:'.URL);
}
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
                  <div class="panel">
                    <div class="col-md-6 col-sm-12">
                        <h1 class="animated fadeInLeft">MICROSOFT MCSE</h1>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> TECHRADIX,SURAT</p>
                    </div>
  <br><br>
    
    <div class="col-md-12 col-sm-12 col-xs-12 mail-wrapper">
      <div class="col-md-12 col-sm-12 col-xs-12 mail-right">
        <div class="col-md-12 col-sm-12 col-xs-12 mail-right-content padding-0">
          <a href="pdf.php?kk=bg">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  MCSE LAB &nbsp;&nbsp;<br>&nbsp;&nbsp;MANUAL1.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=bh">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                   MCSE LAB &nbsp;&nbsp;<br>&nbsp;&nbsp;MANUAL2.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=bi">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  MCSE&nbsp;&nbsp;<br>&nbsp;&nbsp; Presentation.pdf
                </span>
              </center>
            </div>
          </a>
          </div>
        </div>
      </div>
      <!-- end: Content -->




                <!-- Pagination -->
      <div class="clearfix"></div>

<?php include('mobileleftmenu.php') ?>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

    <!-- start: Javascript -->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/jquery.ui.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
   
    
    <!-- plugins -->
    
<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
    <script src="asset/js/plugins/moment.min.js"></script>
    <!-- <script src="asset/js/plugins/fullcalendar.min.js"></script> -->
    <script src="asset/js/plugins/jquery.nicescroll.js"></script>
    <script src="asset/js/plugins/jquery.vmap.sampledata.js"></script>
  


<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
     <script src="asset/js/main.js"></script>
  </body>
</html>
