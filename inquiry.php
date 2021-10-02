<?php
session_start();
//error_reporting(0);
include('config.php');
if(empty($_SESSION['username']))
{
     header('Location:login.php');
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

      <!-- plugins --><link rel="stylesheet" href="asset/css/sweetalert.min.css">
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
<?php include('header.php'); ?>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <?php include('leftmenu.php') ?>


<!-- start: Content -->
            <div id="content">
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="col-md-6 col-sm-12">
                        <h1 class="animated fadeInLeft">BLOCK LIST</h1>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> TECHRADIX,SURAT</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
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
                    </div>

                    <div class="panel-body">
                      <div class="responsive-table">
<?php

if(isset($_REQUEST['enrollment'])){
  $id=$_REQUEST['enrollment'];
  mysqli_query($conn,"UPDATE register SET block = '0' WHERE enrollment = '$id' ");
}
   extract($_POST);
?>
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Enrollment</th>
                          <th>Mobile</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                                    <?php
            
            $sql = "SELECT * FROM register where block=1";
            $result = mysqli_query($conn, $sql);
              $number = 1;
              while ($row = @mysqli_fetch_array($result)) {


            ?> 
                        <tr>
                          <td><?php echo $number ?></td>
                          <td><?php echo $row['name'];?></td>
                          <td><?php echo $row['email'];?></td>
                          <td><?php echo $row['enrollment'];?></td>
                          <td><?php echo $row['mobile'];?></td>
                          <td><button onclick="archiveFunction2('<?php SITE_URL ?>inquiry.php?enrollment=<?php echo $row['enrollment'];?>')" id="<?php SITE_URL ?>index.php?no=<?php echo $row['no'];?>" class="btn ripple-infinite btn-round btn-danger" ><div><span class="fa fa-trash"></span></button>
                        </button>
                      </div></a>
                            </td>
                        </tr>
                       <?php  $number++;} ?>
                      </tbody>
                       
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>

          <!-- end: content -->


<?php include('mobileleftmenu.php') ?>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

<script type="text/javascript">

  function archiveFunction2(id) {
  event.preventDefault(); // prevent form submit
  var form = event.target.form; // storing the form
          swal({
    title: "Are you sure?",
    text: "are you sure you want to unblock this user.",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes continue !",
    cancelButtonText: "No, cancel please!",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) {
      swal("Good job!", "Blocked User!", "success");
      $.ajax({
      url: ''+id,
      type: 'POST',
      success: function(results){
        console.log("results::",results);
            location.reload(); // then reload the page.(3)
      }
    }); 
    } else {
      swal("Cancelled", "Request Cancelled!", "error");
    }
  });
  } 

</script>
    <!-- start: Javascript -->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/jquery.ui.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
   
    
    <!-- plugins -->
    <script src="js/sweetalert.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="asset/js/plugins/jquery.datatables.min.js"></script>
    <script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
    <script src="asset/js/plugins/moment.min.js"></script>
    <script src="asset/js/plugins/fullcalendar.min.js"></script>
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