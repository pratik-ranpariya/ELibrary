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
                        <h1 class="animated fadeInLeft">COMPTIA NETWORK</h1>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> TECHRADIX,SURAT</p>
                    </div>
              <!--       <div class="col-md-6 col-sm-12">
                        <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
                          <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Surat, Gujarat</h3>
                          <h1 style="margin-top: -10px;color: #ddd;">30<sup>o</sup></h1>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <div class="wheather">
                            <div class="stormy rainy animated pulse infinite">
                              <div class="shadow">
                                
                              </div>
                            </div>
                            <div class="sub-wheather">
                              <div class="thunder">
                                
                              </div>
                              <div class="rain">
                                  <div class="droplet droplet1"></div>
                                  <div class="droplet droplet2"></div>
                                  <div class="droplet droplet3"></div>
                                  <div class="droplet droplet4"></div>
                                  <div class="droplet droplet5"></div>
                                  <div class="droplet droplet6"></div>
                                </div>
                            </div>
                          </div>
                        </div>                   
                    </div> -->

      <!--         <div class="col-md-4 col-sm-6 col-xs-6">
                  
                    <div class="panel-body">
                <div class="col-lg-2 col-sm-4 col-4">
                    <a href="">
                        <img src="profileimage/logoAPlus.svg" class="rounded" width="246" height="246">
                    </a>
                </div>
                    </div>
                  
                  </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                  
                    <div class="panel-body">
                <div class="col-lg-2 col-sm-4 col-4">
                    <a href="">
                        <img src="profileimage/logoNetworkPlus.svg" class="rounded" width="246" height="246">
                    </a>
                </div>
                    </div>
                  
                  </div> -->
  <br><br>
    
    <div class="col-md-12 col-sm-12 col-xs-12 mail-wrapper">
      <div class="col-md-12 col-sm-12 col-xs-12 mail-right">
        <div class="col-md-12 col-sm-12 col-xs-12 mail-right-content padding-0">
          <a href="pdf.php?kk=aa">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  A+ 220-801&nbsp;&nbsp; <br>&nbsp;&nbsp;and 220-802.pdf&nbsp;&nbsp;
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=ab">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                   A Complete &nbsp;&nbsp;<br>&nbsp;&nbsp;Study Guide.pdf&nbsp;&nbsp;
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=ac">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA A Complete&nbsp;&nbsp;<br>&nbsp;&nbsp; Practice Tests,&nbsp;&nbsp;<br>&nbsp;&nbsp; 2nd Edition.pdf&nbsp;&nbsp;
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=ad">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  Cloud &nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp; Essentials.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=ae">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  A+, Network+,&nbsp;&nbsp;<br> &nbsp;&nbsp;Security+ Exams&nbsp;&nbsp;<br>&nbsp;&nbsp; in a Nutshell.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=af">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  A+ Certification &nbsp;&nbsp;<br>&nbsp;&nbsp;All-in-One &nbsp;&nbsp;<br>&nbsp;&nbsp;Exam Guide,&nbsp;&nbsp;<br>&nbsp;&nbsp; 8th Edition.pdf&nbsp;&nbsp;
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=ag">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  A+ Certification&nbsp;&nbsp;<br>&nbsp;&nbsp; All-in-One For&nbsp;&nbsp;<br>&nbsp;&nbsp; Dummies.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=ah">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  A+ Complete &nbsp;&nbsp;<br>&nbsp;&nbsp;Deluxe Study Guide,&nbsp;&nbsp;<br>&nbsp;&nbsp; 2nd Edition.pdf
                </span>
              </center>
            </div>
          </a>
                    <a href="pdf.php?kk=ai">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                 A+ Complete&nbsp;&nbsp; <br>&nbsp;&nbsp; Study Guide,&nbsp;&nbsp;<br>&nbsp;&nbsp; 4th Edition.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=aj">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA A+ &nbsp;&nbsp;<br> &nbsp;&nbsp;Training Kit.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=ak">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                   Aplus Complete&nbsp;&nbsp;<br> &nbsp;&nbsp;Review Guide,&nbsp;&nbsp;<br>&nbsp;&nbsp; 4th Edition.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=al">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  Cloud Study &nbsp;&nbsp;<br>&nbsp;&nbsp;Guide Exam&nbsp;&nbsp;<br>&nbsp;&nbsp; CV0-002,&nbsp;&nbsp;<br>&nbsp;&nbsp; 2nd Edition.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=am">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA CSA&nbsp;&nbsp;<br>&nbsp;&nbsp; Study Guide.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=an">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA CySA+&nbsp;&nbsp; <br> &nbsp;&nbsp;Practice Tests.pdf
                </span>
              </center>
            </div>
          </a>
                    <a href="pdf.php?kk=ao">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA IT&nbsp;&nbsp;<br>&nbsp;&nbsp; Fundamentals &nbsp;&nbsp;<br>&nbsp;&nbsp; Study Guide.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=ap">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA Linux &nbsp;&nbsp;<br>&nbsp;&nbsp;Practice Tests,&nbsp;&nbsp;<br>&nbsp;&nbsp; 2nd Edition.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=aq">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA Linux &nbsp;&nbsp;<br>&nbsp;&nbsp;Study Guide,&nbsp;&nbsp; <br>&nbsp;&nbsp;4th Edition.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=ar">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA &nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;Linux+&nbsp;&nbsp;&nbsp;&nbsp; <br>&nbsp;&nbsp;Study Guide, &nbsp;&nbsp;<br>&nbsp;&nbsp; 2nd Edition.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=as1">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA Network+ &nbsp;&nbsp;<br>&nbsp;&nbsp;Study Guide,&nbsp;&nbsp;<br>&nbsp;&nbsp; 3rd Edition.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=at">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA Network+ &nbsp;&nbsp;<br>&nbsp;&nbsp; Training Kit.pdf
                </span>
              </center>
            </div>
          </a>
                    <a href="pdf.php?kk=au">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA PenTest&nbsp;&nbsp;<br>&nbsp;&nbsp; Practice Tests.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=av">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA Project+&nbsp;&nbsp;<br>&nbsp;&nbsp; Study Guide,&nbsp;&nbsp;<br>&nbsp;&nbsp; 2nd Edition.pdf
                </span>
              </center>
            </div>
          </a>

          <a href="pdf.php?kk=ax">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA &nbsp;&nbsp;<br>&nbsp;&nbsp;Security&nbsp;&nbsp; <br>&nbsp;&nbsp;Practice Tests.pdf
                </span>
              </center>
            </div>
          </a>
                    <a href="pdf.php?kk=aw">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  Security Get &nbsp;&nbsp;<br>&nbsp;&nbsp;Certified Get Ahead &nbsp;&nbsp;<br>&nbsp;&nbsp;SY0-401 Study&nbsp;&nbsp;<br> &nbsp;&nbsp;Guide.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=ay">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  Security+ &nbsp;&nbsp;<br>&nbsp;&nbsp;Review Guide,&nbsp;&nbsp;<br>&nbsp;&nbsp; 4th Edition.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=az">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA Security+ &nbsp;&nbsp;<br>&nbsp;&nbsp;Study Guide,&nbsp;&nbsp;<br>&nbsp;&nbsp; 7th Edition.pdf
                </span>
              </center>
            </div>
          </a>
                    <a href="pdf.php?kk=ba">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA Security+&nbsp;&nbsp;<br>&nbsp;&nbsp; Training Kit.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=bb">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  CompTIA Server+&nbsp;&nbsp;<br>&nbsp;&nbsp; Study Guide.pdf
                </span>
              </center>
            </div>
          </a>

          <a href="pdf.php?kk=bd">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  Linux All-In-One&nbsp;&nbsp;<br>&nbsp;&nbsp; For Dummies,&nbsp;&nbsp;<br>&nbsp;&nbsp; 6th Edition.pdf
                </span>
              </center>
            </div>
          </a>
                    <a href="pdf.php?kk=bc">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  Data Storage Networking&nbsp;&nbsp;<br>&nbsp;&nbsp; & CompTIA Storage+ &nbsp;&nbsp;<br>&nbsp;&nbsp;Certification and &nbsp;&nbsp;<br>&nbsp;&nbsp;Beyond.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=be">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  Networking&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp; Essentials,&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp; 3rd Edition.pdf
                </span>
              </center>
            </div>
          </a>
          <a href="pdf.php?kk=bf">
            <div class="col-md-2 col-sm-4 col-xs-12 mail-attachment mail-attachment-icon">
              <div class="col-md-12 padding-0">
                <center>
                  <span class="fa fa-file-pdf-o type-icon"></span>
                </center>
              </div>
              <center>
                <span class="label label-danger">
                  <span class="fa fa-cloud-download"></span>
                  Windows 10 &nbsp;&nbsp;<br>&nbsp;&nbsp;Absolute Beginner's&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;&nbsp;Guide.pdf&nbsp;&nbsp;
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
