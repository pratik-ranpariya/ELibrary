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
                        <h1 class="animated fadeInLeft">EXTRA FOR HACKING</h1>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> TECHRADIX,SURAT</p>
                    </div>
  <br><br>
    
    <div class="col-md-12 col-sm-12 col-xs-12 mail-wrapper">
      <div class="col-md-12 col-sm-12 col-xs-12 mail-right">
        <div class="col-md-12 col-sm-12 col-xs-12 mail-right-content padding-0">
          <a href="pdf.php?kk=bk">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  comptia security &nbsp;&nbsp;<br>&nbsp;&nbsp;plus certification&nbsp;&nbsp;<br>&nbsp;&nbsp; guide_ebook.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=bl">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                   cyber security &nbsp;&nbsp;<br>&nbsp;&nbsp;attack and defense &nbsp;&nbsp;<br>&nbsp;&nbsp;strategies ebook.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=bm">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                 digital forensics &nbsp;&nbsp;<br>&nbsp;&nbsp;and incident&nbsp;&nbsp;<br>&nbsp;&nbsp; response ebook.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=bn">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  HACKING FOR&nbsp;&nbsp;<br> &nbsp;&nbsp;BEGINNERS.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=bo">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  hands on cyber&nbsp;&nbsp;<br>&nbsp;&nbsp; security for&nbsp;&nbsp; <br>&nbsp;&nbsp;architects ebook.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=bp">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  hands on cyber&nbsp;&nbsp;<br>&nbsp;&nbsp; security with&nbsp;&nbsp; <br>&nbsp;&nbsp;block chain &nbsp;&nbsp;<br>&nbsp;&nbsp;ebook.pdf                
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=bq">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  hands on penetration&nbsp;&nbsp;<br>&nbsp;&nbsp; testing on windows &nbsp;&nbsp;<br>&nbsp;&nbsp;ebook.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=br">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  industrial cyber &nbsp;&nbsp;<br>&nbsp;&nbsp;security_ebook.pdf
                </span>
              </center>
            </div>
          </a>
                    <a href="pdf.php?kk=bs">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                 kalilinux anethical&nbsp;&nbsp; <br>&nbsp;&nbsp;hackers cookbook &nbsp;&nbsp;<br>&nbsp;&nbsp;ebook.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=bt">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  learning&nbsp;&nbsp; <br>&nbsp;&nbsp;malware analysis&nbsp;&nbsp; <br>&nbsp;&nbsp;ebook.pdf
                </span>
              </center>
            </div>
          </a>

          <a href="pdf.php?kk=bv">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  mastering pf &nbsp;&nbsp;<br>&nbsp;&nbsp;sense_ebook.pdf
                </span>
              </center>
            </div>
          </a>
                    <a href="pdf.php?kk=bu">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                   mastering kalilinux&nbsp;&nbsp; <br>&nbsp;&nbsp;for advanced&nbsp;&nbsp;<br>&nbsp;&nbsp; penetration&nbsp;&nbsp;<br>&nbsp;&nbsp; testing_ebook.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=bw">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  metasploit for &nbsp;&nbsp;<br>&nbsp;&nbsp;beginners_ebook.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=bx">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  metasploit penetration&nbsp;&nbsp;<br>&nbsp;&nbsp; testing cookbook&nbsp;&nbsp;<br>&nbsp;&nbsp; ebook.pdf
                </span>
              </center>
            </div>
          </a>
                    <a href="pdf.php?kk=by">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  network analysis &nbsp;&nbsp;<br>&nbsp;&nbsp;using wireshark2 &nbsp;&nbsp;<br>&nbsp;&nbsp;cookbook ebook.pdf
                </span>
              </center>
            </div>
          </a>

          <a href="pdf.php?kk=ca">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  practical cyber &nbsp;&nbsp;<br>&nbsp;&nbsp;intelligence&nbsp;&nbsp;<br>&nbsp;&nbsp; ebook.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=cb">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                 practical mobil&nbsp;&nbsp;e<br>&nbsp;&nbsp; forensics&nbsp;&nbsp;<br>&nbsp;&nbsp; ebook.pdf
                </span>
              </center>
            </div>
          </a>
                    <a href="pdf.php?kk=bz">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  nmap_network &nbsp;&nbsp;<br>&nbsp;&nbsp;exploration and &nbsp;&nbsp;<br>&nbsp;&nbsp;security auditing &nbsp;&nbsp;<br>&nbsp;&nbsp;cookbook ebook.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=cc">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                 web penetration&nbsp;&nbsp;<br>&nbsp;&nbsp; testing with&nbsp;&nbsp;<br>&nbsp;&nbsp; kali-linux ebook.pdf
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
